<?php include "db.php"?>
<?php  

function Login(){
global $connection; //ensure connection is global since connections is within the functions scope

$username = $_POST['username'];
$password = $_POST['password'];

if($connection){
  echo "connected";
} else {
  die("Connection failed");
}

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



