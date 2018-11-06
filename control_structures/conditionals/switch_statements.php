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

  $number = rand(1, 10);
  
  switch($number){
    case 5:
    echo "number is 5";
    break;
    case 6:
    echo "number is 6";
    break;
    case 7:
    echo "number is 7";
    break;
    case 1:
    echo "number is 1";
    break;
    case 2:
    echo "number is 2";
    break;
    case 3:
    echo 'number is 3';
    break;
    case 4: 
    echo 'number is 4';
    break;
    case 8:
    echo 'number is 8';
    break;
    case 9:
    echo 'number is 9';
    break;
    default:
    echo 'number is 10';
    break;
  }


  ?>
</body>
</html>