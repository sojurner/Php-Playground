<?php include "db.php"?>
<?php include "functions.php"?>
<?php 
if(isset($_POST['submit'])){
  DeleteRows();
}
?>;
<?php include "includes/header.php" ?>

<div class="container">
  <div class="col-sm-6">
  <h2 class="text-center">Delete</h2>
  <form action="login_delete.php" method="post">
    <div class="form-group">
      <label for="username">UserName</label>
      <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <input type="password" name="password" class="form-control">
      <select name="id" id="">
        <?php 
          showAllData();
        ?>
      </select>
    </div>
    <button class="btn btn-primary" type="submit" name="submit", value="DELETE">delete</button>
  </form>
</div>

<?php include "includes/footer.php" ?>
