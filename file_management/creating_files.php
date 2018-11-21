<?php 

$file = "example.txt";

$handle = fopen($file, 'w');

fclose($handle);

echo "$file file has been created";

?>