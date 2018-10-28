<?php
    include_once "../chapter-2/class.emailer.php";
    if (class_exists('Emailer')){
        $ab = new Emailer('saya@saya.com');
       if (is_a($ab,'Emailer')){
           echo '$ab = Emailer object';
       } else{
           echo '$ab != Emailer object';
       }
    } else {
        die("class not found");
    }
?>