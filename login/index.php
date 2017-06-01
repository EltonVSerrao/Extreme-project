<?php
include("config.php");
include('class/userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
if (!empty($_POST['loginSubmit']))
{
    $usernameEmail=$_POST['usernameEmail'];
    $password=$_POST['password'];
    if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
    {
        $uid=$userClass->userLogin($usernameEmail,$password);
        if($uid)
        {
            $url=BASE_URL.'../index.php';
            header("Location: $url");
            $loggedin = true;
        }
        else
        {
            $errorMsgLogin="<div class=\"alert alert-danger\" role=\"alert\">Account niet gevonden. Probeer opnieuw.</div>";
        }
    }
}

if (!empty($_POST['signupSubmit']))
{

    $username=$_POST['usernameReg'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $name=$_POST['nameReg'];
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($username_check && $email_check && $password_check && strlen(trim($name))>0)
    {
        $uid=$userClass->userRegistration($username,$password,$email,$name);
        if($uid)
        {
            $url=BASE_URL.'../index.php';
            header("Location: $url");
        }
        else
        {
            $errorMsgReg="<div class=\"alert alert-danger\" role=\"alert\">Gebruikersnaam is niet beschikbaar.</div>";
        }

    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link rel="stylesheet" href="M_projectStyles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
<div class="login-page">
    <div class="form">
        <div class="errorMsg"><?php echo $errorMsgReg; ?></div>
        <form method="post" action="" name="signup" class="register-form">
            <input type="text" name="nameReg" placeholder="Naam"/>
            <input type="text" name="emailReg" placeholder="Email"/>
            <input type="text" name="usernameReg" placeholder="Gebruikersnaam"/>
            <input type="password" name="passwordReg" placeholder="Wachtwoord"/><br>
            <input style="background: #4CAF50; color: #FFFFFF;" type="submit" name="signupSubmit" value="Registreer">
            <p class="message">Al een account?<a href="#"> Log in</a></p>
        </form>
        <form method="post" action="" name="login" class="login-form">
            <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
            <input type="text" name="usernameEmail" placeholder="Gebruikersnaam of email" required autocomplete="on" />
            <input type="password" name="password" placeholder="Wachtwoord" required/><br>
            <input style="background: #4CAF50; color: #FFFFFF;" type="submit" name="loginSubmit" value="Login">
            <p class="message">Nog geen account?<a href="#"> Registreer nu</a></p>
        </form>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="M_project.js"></script>

</body>
</html>