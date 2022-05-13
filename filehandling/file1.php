<?php
$file_handler = fopen("my.txt","w");
fwrite($file_handler,"Hello world I am Vinay hi\n");
fwrite($file_handler,"Hello world I am Vinay hi\n");
fclose($file_handler);  
$file_handler = fopen("my.txt","r");
echo filesize("my.txt");
$data = fread($file_handler,filesize("my.txt"));
echo $data;
// echo str_replace("\n","<br>",$data);
// echo $file_handler;

while(!feof($file_handler))
{
    echo fgets($file_handler);
    echo "<br>";
}
fclose($file_handler);
$file_handler = fopen("my.txt","r");
// echo fgetc($file_handler);
// echo fgetc($file_handler);

?>
