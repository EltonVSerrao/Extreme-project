<?php

session_start();

require_once 'helpers/security.php';

$errors =isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields =isset($_SESSION['fields']) ? $_SESSION['fields'] : [];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form</title>

    <link rel="stylesheet" href="main.css">
</head>
    <body>
        <div class="contact">
            <h1>Contact</h1>
            <?php if (!empty($errors)): ?>
                <div class="panel">
                   <ul><li><?php echo implode('</li><li> ', $errors); ?></li></ul>
                </div>
            <?php endif;?>
            <form action="contact.php" method="post">
                <label>
                    <h4>Naam *</h4>
                    <input type="text" name="naam" autocomplete="off"<?php echo isset($fields['naam']) ? 'value="' .e($fields['naam']) . '"' : '' ?> >
                </label>
                <label>
                    <h4>Straatnaam *</h4>
                    <input type="text" name="strnaam" autocomplete="off"<?php echo isset($fields['strnaam']) ? 'value="' .e($fields['strnaam']) . '"' : '' ?>>
                </label>
                <label>
                    <h4>email address *</h4>
                    <input type="text" name="email" autocomplete="off"<?php echo isset($fields['email']) ? 'value="' .e($fields['email']) . '"' : '' ?>>
                </label>
                <label>
                    <h4>message</h4>
                    <textarea name="message" rows="8"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
                </label>



                <input type="submit" value="verzenden" >


            </form>
        </div>
    </body>
</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>