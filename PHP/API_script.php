<?php

$MyFile = '../myfile.json';

$API_File_Last_Update = file_get_contents('https://api.dawum.de/last_update.txt');

if (file_exists($MyFile)) {
    $MyFile_Content = file_get_contents($MyFile);
    $PHP_Array = json_decode($MyFile_Content, true);
}


if (!file_exists($MyFile) or ($PHP_Array['Database']['Last_Update'] != $API_File_Last_Update)) {
    $API_File_Content = file_get_contents('https://api.dawum.de/');
    file_put_contents($MyFile, $API_File_Content);

    $MyFile_Content = file_get_contents($MyFile);
    $PHP_Array = json_decode($MyFile_Content, true);
}
