<?php
$filename = "./file.txt";
$handle = fopen($filename, "r");
$content = fread($handle, filesize($filename));

echo $content;
fclose($handle);



















// // $filename = "./file.txt";
// // $handle = fopen ($filename, "r"); //open file in read mode
// // $content = fread($handle, filesize($filename)); //read file

// // echo $content; //printing data of file
// // fclose ($handle);//close file.

// $filename = "./file.txt";
// $handle = fopen ($filename, "a"); //open file in read mode
// fwrite($handle, "Are you available \n"); //read file

// //echo $content; //printing data of file
// fclose ($handle);//close file.

//open a file using fopen
//Read a file using fread
//write into a file using fwrite
// close a file using fclose
// delete a file 