<?php
    require_once "class.emailer.php";
    require_once "class.extendedemailer.php";
    $xemailer = new ExtendedEmailer();
    $xemailer->setSender("hasin@pageflakes.com");
    $xemailer->addRecipients("hasin@somewherein.net");
    $xemailer->setSubject("Just a Test");
    $xemailer->setBody("Hi Hasin, How are you?");
    $xemailer->sendEmail();
?>