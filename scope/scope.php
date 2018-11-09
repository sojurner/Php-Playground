<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='normalize.css'>
<link rel='stylesheet' type='text/css' href='style.css'>
<title>Static Composition 3</title>
</head>
<body>

<?php 

$str = "outside"; //global

echo $str;

echo "<br>";

function convert(){

  global $str;  // local Reassingment is transcribed globally

  $str = "inside"; //local
}

convert();

echo $str;

?>

</body>
</html>