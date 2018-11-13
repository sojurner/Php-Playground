<?php 

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

  if($connection){
    echo "connected";
  } else {
    die("Connection failed");
  }

  if($username && $password){
    echo $username . "<br>";
    echo $password;

  } else {
    echo "missing one or more fields";
  }
}
?>


<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='normalize.css'>
<link rel='stylesheet' type='text/css' href='style.css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>login</title>
</head>
<body>

<div class="container">
  <div class="col-xs-6">
  <form action="login.php" method="post">
<div class="form-group">
<label for="username">UserName</label>
<input type="text" name="username" class="form-control">
</div>
<div class="form-group">
<label for="password">password</label>

<input type="password" name="password" class="form-control">
</div>
<button class="btn btn-primary" type="submit" name="submit", value="submit">Submit</button>

  </form>
  </div>
</div>


</body>
</html>