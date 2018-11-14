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

function CreateUser(){
global $connection; //ensure connection is global since connections is within the functions scope

  $username = $_POST['username'];
  $password = $_POST['password'];
  // $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

  $username = mysqli_real_escape_string($connection, $username);
  // handle escaped characters
  $password = mysqli_real_escape_string($connection, $password);
  // handle escaped characters

$hashFormat = "$2y$10$";

$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);

  $query = "INSERT INTO users(username, password) ";  //concatenating strings
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);



  if(!$result){
    die('Query Failed' . mysqli_error());
  } else {
    echo 'user added';
  }
}



