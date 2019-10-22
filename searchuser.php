<?php
require('dbconfig.php');

if(!empty($_POST["searchinput"]))
{
  $sql = "SELECT * FROM user WHERE username='" . $_POST["searchinput"] . "'";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    //output data fo each row
    $row = mysqli_Fetch_assoc($result);
    echo "<span class='status-available'> Username Found.</span>";
  }
  else{
      echo "<span class='status-available'> Username Not Found.</span>";
  }
}

 ?>
