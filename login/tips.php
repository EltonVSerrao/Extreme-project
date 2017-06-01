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
    <style>
    </style>
    <?php
    $dbConnection = getDB();
    ?>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 30px;">
        <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><a href="tips.php">Tips</a></li>
                    <li><a href="settings.php">Account instellingen</a></li>
                    <li><a href="<?php echo BASE_URL; ?>logout.php"><span class="text-danger">Uitloggen</span></a></li>
                </ul>
        </div>
    </nav>
    <div class="jumbotron"></div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Text</th>
            <th>Accept/decline</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql = $dbConnection->prepare("SELECT tip_id, tip_title, tip_content FROM tips");
            $sql->execute();
        ?>
        <?php while($row = $sql->fetch()) :?>
        <tr>
            <td name="<?php $row['tip_id'];?>"><?php echo $row['tip_id']; ?></td>
            <td><?php echo $row['tip_title']; ?></td>
            <td><?php echo $row['tip_content']; ?></td>
            <td>
                <form method="post">
                    <a href="" class="btn btn-xs btn-success"> ✓ </a>
                    <a href="tips.php?delete=<?php $row['tip_id']; ?>" id="delete" class="btn btn-xs btn-danger"> ✕ </a>
                </form>
            </td>
        </tr>
            <?php
        endwhile;
        ?>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="3"></th>
        </tr>
        </tfoot>
    </table>

</div>
</body>
</html>