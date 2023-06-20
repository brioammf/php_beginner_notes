<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])){
  
  //echo '<h3>' . $GET['username'] . '<h3>';
  echo '<h3>' . $GET['username'] . '<h3>';

}?>

<!-- pass data through link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>
<br><br>
<!-- pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div>
    <label>Name:</label>
    <input type="text" name ="name">
  </div>
  <br>
  <div>
    <label>Password:</label>
    <input type = "password" name="password"> 
  </div>
  <br>
  <input type="submit" name="submit" value="Submit"></form>