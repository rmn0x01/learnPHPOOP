<?php
    include_once('class.SerializationExample.php');
    $serializedcontent = file_get_contents("serialization_output.txt");
    $unserializedcontent = unserialize($serializedcontent);
    print_r($unserializedcontent);
?>