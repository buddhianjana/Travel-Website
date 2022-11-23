<?php

session_start();
include("db.php");
$errors=[];

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM reg WHERE email='".$email."' AND password='".$password."'";
    if($user_data=$conn->query($sql)){
        if($user_data->num_rows > 0){
            $_SESSION['user_logged']=true;
            header("Location: pay.php");
            exit;
            //success login
        }else{
            $errors[]="Recheck Email & Password";
        }
    }else{
        $errors[]="Loging Failed";
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
            <!-- login body -->
            <?php
                if (!empty($errors)) {
                    foreach ($errors as $key => $value) {
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                <?php
                    }
                }
                ?>
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button type="submit" name="login">Log In</button>
            <h3>Don't Have Account? <span><a href="register.php">Register</a></span></h3>
        </div>
        </form>
    </section>
</body>
</html>