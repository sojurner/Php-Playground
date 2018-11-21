<?php 

$file = "example.txt";

if($handle = fopen($file, 'r')){

 // echo $content = fread($handle, 10); //10 represents character size

 echo $content = fread($handle, filesize($file));


  fclose($handle);
} else {

  echo "The application was not able to read file";

}

?>