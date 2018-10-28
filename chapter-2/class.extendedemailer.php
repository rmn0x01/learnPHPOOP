<?php
    class ExtendedEmailer extends Emailer{
        function __construct(){
            $this->recipients = array();
        }
            public function setSender($sender){
                $this->sender=$sender;
            }
    }
?>