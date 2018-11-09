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
    echo 'welcome';
  }

?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='normalize.css'>
<link rel='stylesheet' type='text/css' href='style.css'>
<title>Static Composition 3</title>
</head>
<body>

<form action="form.php" method="post">

    <input type="username" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit">submit</button>

</form>

<!-- <form action="form.php" method="post">

<input type="text" name="username" placeholder="enter username"/>
<input type="password" name="password" placeholder="enter password"/>
<input type="submit" placeholder="submit" name="submit"/> -->

<!-- </form> -->


</body>
</html>