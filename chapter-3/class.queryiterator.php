<?php
    class QueryIterator implements Iterator{
        private $result;
        private $conn;
        private $key=0;
        private $valid;

        function __construct($dbhost, $user, $password, $dbname){
            $this->connection = mysqli_connect($dbhost,$user,$password,$dbname);
        }
        public function execute($query){
            $this->result=mysqli_query($this->connection,$query);
            if(mysqli_num_rows($this->result)>0){
                $this->next();
            }
        }
        public function rewind(){}
        public function current(){
            return $this->data;
        }
        public function key(){
            return $this->key;
        }
        public function next(){
            if ($this->data = mysqli_fetch_assoc($this->result)){
                $this->valid = true;
                $this->key +=1;
            } else {
                $this->valid = false;
            }
        }
        public function valid(){
            return $this->valid;
        }
    }

    $qi = new QueryIterator("localhost","root","","mysql");
    $qi->execute('select name from help_category');
    while ($qi->valid()){
        print_r($qi->current());
        $qi->next();
    }
    

?>