<?php include "db.php";

function showAllData() {
  global $connection; //ensure connection is global since connections is within the functions scope
$query = "SELECT * FROM users";  //concatenating strings
$result = mysqli_query($connection, $query);

if(!$result){
  die('Query Failed' . mysqli_error());
}


while($row = mysqli_fetch_assoc($result)){
  $id = $row['id'];
  $name = $row['username'];
echo "<option value='$id'>$name</option>";
}
}
?>



