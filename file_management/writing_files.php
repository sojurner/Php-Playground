<?php 

$file = "example.txt";
if($handle = fopen($file, 'w')){

  fwrite($handle, "This is Paul wall, yall");

 echo $content = fread($handle, filesize($file));

  fclose($handle);
} else {
  echo "the application was not able to write on the file";
}

if($handle = fopen($file, 'r')){

  // echo $content = fread($handle, 10); //10 represents character size
 
$content = fread($handle, filesize($file));

echo $content . "<br>" . "<br>" . "Writing and Reading";
 
 
   fclose($handle);
 }

?>