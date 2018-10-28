<?php
    class SerializationExample{
        public $var1;
        private $var2;
        protected $var3;
        static $var4;

        public function __construct(){
            $this->var1='value 1';
            $this->var2='value 2';
            $this->var3='value 3';
            SerializationExample::$var4='value4';
        }
    }
    $so = new SerializationExample();
    $serializedso = serialize($so);
    file_put_contents("serialization_output.txt",$serializedso);
//    echo `whoami`;  
//    echo 'done';    

?>