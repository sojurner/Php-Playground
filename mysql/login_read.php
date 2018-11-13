<?php include "db.php"; //connecting to database loginapp

  if($connection){ // if connection is successful
    echo "connected"; //echo connected
  } else { // if connection is unsuccessful
    die("Connection failed"); //output the message and terminate script
  }
  $query = "SELECT * FROM users";  // query gather all users from table
  $result = mysqli_query($connection, $query); // passing connection and query to my query method

  if(!$result){ // if no response
    die('Query Failed' . mysqli_error()); // output the message and terminate script, throw error
  }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>login read</title>
</head>
<body>

<div class="container">
  <div class="col-sm-6">

  <?php 
  
  while($row = mysqli_fetch_assoc($result)){ //while a row exists in the associative array
  
  ?>

    <pre>

  <?php 
    print_r($row); // printing row 
  ?>

    </pre>

  <?php 
  }
  ?>

  </div>
</div>


</body>
</html>