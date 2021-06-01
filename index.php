<?php

$fileName = "csv.txt";

$file = fopen($fileName, "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line,
        "<br>";
}

fclose($file);