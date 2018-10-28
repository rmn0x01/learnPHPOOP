<?php
    class ParentClass{
        public function getClass(){
            echo get_class($this);  //return ChildClass
            echo get_class();       //return ParentClass
        }
    }

    class ChildClass extends ParentClass{
    }

    $obj = new ChildClass();
    $obj->getClass();
?>