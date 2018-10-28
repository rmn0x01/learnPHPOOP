<?php
    class Looping{
        public $a='1';
        public $b='2';
        public $c='3';
    }

    $aa = new Looping();
    foreach($aa as $i=>$val){
        echo $i."   ".$val."<br>";
    }
    echo "<br><br>";

    $arr=[1,2,3,4,5];
    foreach($arr as $i){
        echo $i."<br>";
    }
    echo "<br><br>";
    for($i=0;$i<10;$i++){
        echo $i."<br>";
    }
?>