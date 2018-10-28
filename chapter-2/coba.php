<?php
    $file_content = file_get_contents("words.txt");
    $file2 = strtolower($file_content);
    var_dump(str_word_count($file2,1));
?>