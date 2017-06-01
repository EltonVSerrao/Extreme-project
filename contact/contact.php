<?php

session_start();

require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$errors = [];

if (isset($_POST['naam'], $_POST['email'], $_POST['strnaam'],$_POST['message'])){

    $fields = [
        'naam' => $_POST['naam'],
        'email' => $_POST['email'],
        'strnaam' => $_POST['strnaam'],
        'message' => $_POST['message']
    ];

    foreach($fields as $field => $data){
        if (empty($data)){
            $errors[] = 'The ' . $field . ' field is required';
        }
    }

    if (empty($errors)){

        $m = new PHPMailer; // mail de het bedrijf

        $m->isSMTP();
        $m->SMTPAuth = true;

        $m->Host = 'smtp.gmail.com';
        $m->Username = 'moneyuphelp@gmail.com';
        $m->Password = 'moneyup123';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m->isHTML();

        $m->Subject = 'Contact form submitted';

        $m->Body = 'From: ' . $fields['naam'] . ' (' . $_POST['email'] . ')<p>' . $fields['message'] . ' </p>';

        $m->FromName = $fields['naam'];

        $m->AddAddress('moneyuphelp@gmail.com'); // ful hier naam van bedrijf in

        if ($m->send()){
            sleep(10);                                                   // 10 seconden wachten
            header('Location: thanks.php');
        } else{
            $errors[] = 'Sorry, could not send email. try again later.';
        };
        $mail = new PHPMailer; //mail voor de klant

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'moneyuphelp@gmail.com';              //EMAIL EN WACHTWOORD INVULLEN ANDERS WERK HET NIET
        $mail->Password = 'moneyup123';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->isHTML();

        $mail->Body='From: noreply  .<h3>Bedankt voor je bericht.</h3><br><h5>Wij nemen zo spoedig mogelijk contact met je op.</h5> ';
        $mail->FromName = 'Money Up';
        $mail->AddAddress($_POST['email'], $_POST['naam']);

         if ($mail->send()){
             header('Location: thanks.php');
             die();
         } else{
             $errors[] = 'Sorry, could not send email. try again later.';
         }
    };

}else{
    $errors[] = 'Something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: index.php');

