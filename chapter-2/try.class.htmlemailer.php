<?php
require_once("class.emailer.php");
require_once("class.htmlemailer.php");
$hm = new HtmlEmailer('wasoe');
//.... do other things
$hm->addRecipients("hasin@somewherein.net");
$hm->setSubject("Just a Test");
$hm->setBody("Hi Hasin, How are you?");
//var_dump($hm);
//$hm->sendEmail();
$hm->sendHTMLEmail();
?>