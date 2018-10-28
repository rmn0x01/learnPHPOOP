<?php
    class Emailer{
        protected $sender;
        protected $recipients;
        protected $subject;
        protected $body;

        function __construct($sender){
            $this->sender = $sender;
            $this->recipients = array();
        }
        public function addRecipients($recipient){
            //die(var_dump($this->recipients));
            array_push($this->recipients,$recipient);
        }
        public function setSubject($subject){
            $this->subject = $subject;
        }
        public function setBody($body){
            $this->body = $body;
        }
        public function sendEmail(){
            foreach($this->recipients as $recipient){
                //cek isi
                // echo $recipient.'<br>';
                // echo $this->subject.'<br>';
                // echo $this->body.'<br>';
                // echo $this->sender.'<br>';
                $result = mail($recipient, $this->subject, $this->body, "From : {$this->sender}\r\n");
                if ($result){
                    echo 'success';
                } else{
                    echo 'class.emailer.php <br> hore';
                }
            }
        }
    }

?>