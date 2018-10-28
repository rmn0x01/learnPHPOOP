<?php
    $users = new ArrayObject(array("hasin"=>"hasin.com","hason"=>"hason.com","hasu"=>"hasu.com","hajilak"=>"hajilak.com"));
    $iterator = $users->getIterator();
    while($iterator->valid()){
        echo "{$iterator->key()}    {$iterator->current()}<br>";
        $iterator->next();
    }
?>