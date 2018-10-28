<?php
    include_once 'class.wordcounter.php';
    $wc = new Wordcounter('words.txt');
    $wc->count(WordCounter::ASC);
?>