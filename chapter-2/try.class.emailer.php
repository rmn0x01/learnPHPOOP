<?php
    include 'class.emailer.php';
    $emailerobject = new Emailer("hasin@pageflakes.com");
    $emailerobject->addRecipients("hasin@somewherein.net");
    $emailerobject->setSubject("Just a Test");
    $emailerobject->setBody("Hi Hasin, How are you?");
    $emailerobject->sendEmail();
?>