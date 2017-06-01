 <?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet">

<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 30px;">
        <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="tips.php">Tips</a></li>
                    <li><a href="settings.php">Account instellingen</a></li>
                    <li><a href="<?php echo BASE_URL; ?>logout.php"><span class="text-danger">Uitloggen</span></a></li>
                </ul>
        </div>
    </nav>
    <h3>Welkom <?php echo $userDetails->name; ?></h3>

</div>
</body>
</html>
