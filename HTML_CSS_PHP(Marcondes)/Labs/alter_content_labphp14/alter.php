<?php
    $file  = fopen("text.txt", "r") or die ("Arquivo não localizado");
    while(!feof ($file))
    {
        echo fgets($file)."<br>";
    }

    $content = file_get_contents("text.txt");
    $lines = explode("\r\n", $content);

    unset($lines[$_GET['line']]);
    $new_content = implode("\r\n", $lines);


    $file = fopen("text.txt", "w+") or die;
    fwrite($file, $new_content);
?>