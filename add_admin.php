<?php
  include_once('includes/functions.php');
  
  // If $_POST exists, process form.
  if ($_POST) {
    $admin_user_name = $_POST['admin_user_name'];
    $admin_password = $_POST['admin_password'];
    $user_name = $_POST['user_name'];
    $user_location = $_POST['user_location'];
    
  } else { // If $_POST doesn't exist, display the form to the user
?>
<!DOCTYPE html>
<html>
  <head>
    <title>istand4.us - Add Admin User</title>
  </head>
  <body>
    <h1>Add Admin User</h1>
    <form action="add_admin.php" method="post">
      <fieldset>
        <h2>Admin Information</h2>
        <label for="admin_user_name">User Name:</label><input type="text" name="admin_user_name" id="admin_user_name">
        <label for="admin_password">Password:</label><input type="password" name="admin_password" id="admin_password">
        <label for="admin_password_confirm">Retype Password:</label><input type="password" name="admin_password_confirm" id="admin_password_confirm">
      </fieldset>
      <fieldset>
        <h2>User Information</h2>
        <label for="user_name">Display Name:</label><input type="text" name="user_name" id="user_name">
        <label for="user_location">Location:</label><input type="text" name="user_location" id="user_location">
      </fieldset>
      <fieldset>
        <button type="submit">Add Admin User</button>
      </fieldset>
    </form>
  </body>
</html>
<?php
  } // End if ($_POST)