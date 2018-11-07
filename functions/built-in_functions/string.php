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
  //http://php.net/ref.strings
  
  echo addcslashes('Paul-kim', 'A..z'); // if char list specifies a range of a lower to higher value will parse values within the range
  echo "<br>";
  echo addcslashes('zAul-.kim', 'z..A'); // if first character is higher than second than will specify only the characters listed 
  echo "<br>";


  $str = "Is your name O'Reilly?";
  echo addslashes($str);
  echo "<br>";
  echo "<br>";
  
  ?>


  <?php
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
?>
</body>
</html>