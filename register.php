<?php

include("db.php");

$error = [];
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($name != "") {
        if (strlen($name) > 4) {
            if (strlen($password) > 4) {
                if ($password == $c_password) {
                    $password = md5($password);
                    $sql = "INSERT INTO reg (name,email,password) VALUES ('" . $name . "','" . $email . "','" . $password . "')";
                    if ($conn->query($sql)) {
                        $success = true;
                    } else {
                        $error[] = "Server Error";
                    }
                } else {
                    $error[] = "Password not matched";
                }
            } else {
                $error[] = "Password too short";
            }
        } else {
            $error[] = "Invalid Name";
        }
    } else {
        $error[] = "Please type your Name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadTrip Sri Lanka</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <section>
        <div class="logo">
            <img src="images/logo.png" alt="" srcset="">
        </div>

        <form action="" method="POST">
        <div class="input">
        <?php
                if (!empty($error)) {
                    foreach ($error as $key => $value) {
                        # code...
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                    <?php
                    }
                }
                if (isset($success)) {
                    ?>
                    <div class="success">Register successfully</div>
                <?php
                }
                ?>
            <input name="name" type="type" placeholder="Name">
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <input name="c_password" type="password" placeholder="Conform Password">
            <button name="signup">Sign Up</button>
            <h3>Have Account? <span><a href="login.php">Log In</a></span></h3>
        </div>
        </form>
    </section>
</body>

</html>