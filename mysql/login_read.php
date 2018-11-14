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

<?php include "includes/header.php" ?>

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
<?php include "includes/footer.php" ?>