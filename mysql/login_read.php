<?php 

  $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

  if($connection){
    echo "connected";
  } else {
    die("Connection failed");
  }
  $query = "SELECT * FROM users";  //concatenating strings


  $result = mysqli_query($connection, $query);

  if(!$result){
    die('Query Failed' . mysqli_error());
  }

?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Static Composition 3</title>
</head>
<body>

<div class="container">
  <div class="col-sm-6">

  <?php 
  
  while($row = mysqli_fetch_assoc($result)){

    ?>

    <pre>
    <?php 
    
    print_r($row);
    
    ?>
    </pre>
  <?php 

  }
  
  ?>

  </div>
</div>


</body>
</html>