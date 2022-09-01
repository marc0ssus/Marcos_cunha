<?php
    $file  = fopen("text.txt", "r") or die ("Arquivo não localizado");
    
    while(!feof ($file))
    {
        echo fgets($file)."<br>";
    }
?>