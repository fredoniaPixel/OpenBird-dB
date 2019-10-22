<?php
require('dbconfig.php');

$sql =  "DELETE FROM user
 WHERE username = username='$_POST[username]''";

if (mysqli_query($conn, $sql))
{
  echo "You've Been Deleted, if you want to continue playing, make a new account";
  session_destroy();
    header('Location: login.php');
}
else {
  die("Mission Report...We have to dig deeper");
}
mysqli_close($conn);

 ?>
