<?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet"

<!DOCTYPE html>
<html>
<head>
    <?php
        $dbConnection = getDB();
    ?>
    <style>
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 30px;">
        <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tips.php">Tips</a></li>
                    <li class="active"><a href="settings.php">Account instellingen</a></li>
                    <li><a href="<?php echo BASE_URL; ?>logout.php"><span class="text-danger">Uitloggen</span></a></li>
                </ul>
        </div>
    </nav>
    <?php
        $update = "UPDATE users2
        SET name=:name, email=:email, username=:username
        WHERE uid=$session_uid";
        $query = $dbConnection->prepare($update);

        $query->bindParam(':name', $_REQUEST['name']);
        $query->bindParam(':email', $_REQUEST['email']);
        $query->bindParam(':username', $_REQUEST['username']);
        if(isset($_POST['editsubmit'])) {
            $query->execute();
            echo '<div class="alert alert-success" role="alert">Aan het updaten. Even geduld a.u.b.</div>';
            header("Refresh:2");
        }
        else if($_POST['editsubmit'] != true) {
            echo '<div class="alert alert-warning" role="alert">Nog niet opgeslagen..</div>';
        }


    ?>
    <form method="post">
        <input name="name" id="name" type="text" class="form-group form-control" placeholder="Naam" value="<?php echo $userDetails->name; ?>"</input>
        <input name="email" id="email" type="text" class="form-group form-control" placeholder="Email" value="<?php echo $userDetails->email; ?>"</input>
        <input name="username" id="username" type="text" class="form-group form-control" placeholder="Gebruikersnaam" value="<?php echo $userDetails->username; ?>"</input>
        <input type="submit" name="editsubmit" class="btn btn-primary" value="Opslaan" onclick="location.href='settings.php'"> </input>
    </form>
</div>
</body>
</html>