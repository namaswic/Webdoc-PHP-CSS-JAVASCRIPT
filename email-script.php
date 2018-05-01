<?php
    $email=$_POST['email'];
    $subject = 'Appointment Booked by WEBDOC';
    $message = 'Here are the appintment details';

    mail($email, $subject, $message);
?>
