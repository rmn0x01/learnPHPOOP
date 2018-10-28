<?php
    include 'interface.dbdriver.php';
    include 'abstract.reportgenerator.php';
    class MySQLDriver extends ReportGenerator implements DBDriver{
        public function connect(){
            echo 'ceritanya connect <br>';
        }
        public function execute($sql){
            echo "ceritanya query <br>"; 
        }
    } 
?>