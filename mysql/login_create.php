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
  $query = "INSERT INTO users(username, password) ";  //concatenating strings
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);

  if(!$result){
    die('Query Failed' . mysqli_error());
  } else {
    echo 'user added';
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

<title>Static Composition 3</title>
</head>
<body>

<div class="container">
  <div class="col-xs-6">
  <form action="login_create.php" method="post">
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