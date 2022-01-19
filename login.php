<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">

    <!-- Validasi PHP -->
    <?php
    session_start();
    // define variables and set to empty values
    $emailErr = $passErr = $captErr = "";
    $email = $pass = $capt = "";

    //Digunakan untuk  memvalidasi semua data supaya data tidak kosong
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email_user"]) | empty($_POST["password_user"]) |  (empty($_POST["captcha_code"]))) {
            if (empty($_POST["email_user"])) {   //digunakan untuk mengecek email supaya tidak kosong 
                $emailErr = "Email harus diisi";
            } else {
                $email = $_POST["email_user"];

                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Email tidak sesuai format";
                }
            }

            if (empty($_POST["password_user"])) {     //mengecek supaya website user tidak kosong
                $passErr = "Password tidak boleh kosong";
            } else {
                $pass = md5($_POST["password_user"]);
            }


            if (empty($_POST["captcha_code"])) {      //mengecek supaya gender wajib dipilih salah satu
                $captErr = "Harus di isi";
            } else {
                $capt = md5($_POST["captcha_code"]);
            }
        } else {
            include "database/koneksi.php";
            $emailUser = $_POST['email_user'];
            $passwordUser = md5($_POST['password_user']);
            $capt = md5($_POST['captcha_code']);

            $sql = "SELECT * FROM tbl_users WHERE email='$emailUser' AND password='$passwordUser'";
            $sql2 = "UPDATE tbl_users SET captcha ='$capt' where email ='$emailUser'";

            if ($_SESSION["captcha_code"] != $_POST["captcha_code"]) {
                echo "<script>alert('captcha tidak sesuai');</script>";
            } else {
                $update = mysqli_query($con, $sql2);
                $login = mysqli_query($con, $sql);
                $ketemu = mysqli_num_rows($login);
                $r = mysqli_fetch_array($login);
                if ($ketemu > 0) {
                    session_start();
                    $_SESSION['emailUser'] = $emailUser;
                    $_SESSION['status'] = "login";
                    echo "USER BERHASIL LOGIN<br>";
                    header("location:dashboard/index_dashboard.php");
                } else {
                    echo "<script>
                        alert('Login gagal! username & password tidak benar');
                        window.location = login.php;
                        </script>";
                }
            }

            mysqli_close($con);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

</head>

<body>
    <div class="container my-5">
        <div class="mx-auto my-5 text-center">
            <h2>EeeGame Store</h2>
            <p class="lead fw-normal">Pilih game dan mainkan bersama teman terbaik anda sekarang juga</p>
            <a class="btn btn-outline-secondary" href="index.php">EeeGame</a>
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email_user" class="form-control" placeholder="Your Email Address" value="<?php echo $email; ?>">
                <span class="text-warning "><?php echo $emailErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password_user" class="form-control" placeholder="Your Password" minlength="6">
                <span class="text-warning mt-1"><?php echo $passErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Captcha <img src='captcha.php'></label>
                <input type="text" name="captcha_code" class="form-control">
                <span class="text-warning m-1"><?php echo $captErr; ?></span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="boostrap/js/bootstrap.min.js"></script>
</body>

</html>