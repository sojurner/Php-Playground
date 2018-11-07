<!DOCTYPE html>
<html lang='en'>
<head>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css' integrity='sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp' crossorigin='anonymous'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='normalize.css'>
<link rel='stylesheet' type='text/css' href='style.css'>
<title>Static Composition 3</title>
</head>
<body>
<?php 

function greeting($str, $break, $age, $prompt){
  //$ is always needed when assigning variables
  echo $str . $break  . $age . $prompt;
}

greeting('Hi_Paul', "<br>", "<p>Your age is</p>", "<span>...</span>");

function calculate($number1, $number2){
  $sum =  $number1 + $number2;

  echo $sum . " - " . $number1 . " = " . $number2;
}

calculate(50, 25)

?>
</body>
</html>