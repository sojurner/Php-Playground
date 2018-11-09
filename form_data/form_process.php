<?php 
  if(isset($_POST['submit'])){
    $name = array('paul', 'ben', 'mike');
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];


    if(strlen($password) < $minimum){
      echo "password has to be longer than five";
    } 
    if(strlen($password) > $maximum){
      echo "password cannot be longer than ten";
    }
  }

  if(!in_array($username,$name)){
    echo 'sory no login';
  } else {
    echo 'welcome' . $username;
  }
?>


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


?>


</body>
</html>