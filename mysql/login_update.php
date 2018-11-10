<?php include "db.php";


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
  <form action="login_create.php" method="post">
  <div class="form-group">
    <label for="username">UserName</label>
    <input type="text" name="username" class="form-control">
  </div>
  <div class="form-group">
  <label for="password">password</label>
    <input type="password" name="password" class="form-control">

    <select name="id" id="">

      <?php 

        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
        echo "<option value='$id'>$id</option>";
        }
        ?>
    
    </select>
  </div>
  <button class="btn btn-primary" type="submit" name="submit", value="submit">Submit</button>
  </form>
  </div>
</div>


</body>
</html>