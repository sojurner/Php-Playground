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

if($username && $password){
  echo $username . "<br>";
  echo $password;

} else {
  echo "missing one or more fields";
}
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

function UpdateTable() {
global $connection; //ensure connection is global since connections is within the functions scope

  $username = $_POST['username']; // linking the input values of username
  $password = $_POST['password']; // linking the input values of password
  $id = $_POST['id']; // linking the input values of id
  $query = 'UPDATE users SET '; // SPACE IS VERY IMPORTANT AFTER SET
  $query .= "username = '$username', ";  // SPACE IS VERY IMPORTANT
  $query .= "password = '$password' "; 
  $query .= "WHERE id = $id ";
  $result = mysqli_query($connection, $query);
  
  if(!$result){
    die("query Failed" . mysqli_error($connection));
  }
}

function DeleteRows() {
global $connection; //ensure connection is global since connections is within the functions scope

  $id = $_POST['id']; // linking the input values of id
  $query = "DELETE FROM USERS "; // SPACE IS VERY IMPORTANT AFTER SET
  $query .= "WHERE id = $id ";
  $result = mysqli_query($connection, $query);
  
  if(!$result){
    die("query Failed" . mysqli_error($connection));
  }
}
?>