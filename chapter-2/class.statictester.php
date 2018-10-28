<?php
    class StaticTester{
        private static $id = 0;
        function __construct(){
            self::$id +=1;
        }
        public static function checkIdFromStaticMethod(){
            echo "Current Id from static method ". self::$id . "<br>";
        }
        public function checkIdFromNonStaticMethod(){
            echo "Current Id from non static method " . self::$id . "<br>";
        }
    }
        $st1 = new StaticTester();
        StaticTester::checkIdFromStaticMethod(); //1
        $st2 = new StaticTester();
        $st1->checkIdFromNonStaticMethod(); //2
        $st1->checkIdFromStaticMethod(); //2
        $st2->checkIdFromNonStaticMethod();
        $st3 = new StaticTester();
        StaticTester::checkIdFromStaticMethod();
    
?>