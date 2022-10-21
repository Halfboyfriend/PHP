<?php
$filename = "./file.txt";
$handle = fopen($filename, "a");
fwrite($handle, "Welcome Owoyemi \n");
fclose($handle);