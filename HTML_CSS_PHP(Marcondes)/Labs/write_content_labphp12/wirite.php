<?php
    $file  = fopen("text.txt", "w") or die ("Arquivo não localizado");
    $text = "Não sei";
    fwrite($file, $text);
    fwrite($file, "Macaco");


    $file  = fopen("text.txt", "r") or die ("Arquivo não localizado");
    while(!feof ($file))
    {
        echo fgets($file)."<br>";
    }
?>    