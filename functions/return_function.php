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
  
    function difference($num1, $num2){

      $difference = $num1 - $num2;

      return $difference;
    }

   $differentNumber = difference(100, 20);

   $differentNumber = difference($differentNumber, 12);

   echo $differentNumber . "<p> is the number we want</p>";

  ?>

</body>
</html>