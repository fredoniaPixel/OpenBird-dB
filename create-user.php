<?php
//create-user.php
// 1. Check that the passwords are the xhprof_sample_disable
// 2. Create a user
// 3. Redirect to login
if ($pass != $cpass) {
  header('Location: signup.php');
}
$hashedPassword = md5($pass);
require('db.php');
runSafeQuery(
  "INSERT INTO user (username, password, first_name, last_name, address, email)
    VALUES (?,?,?,?,?,?)
  ",
  [
    "ssssss",
    $name,
    $hashedPassword,
    $first_name,
    $last_name,
    $address,
    $email

  //  'https://statics.sportskeeda.com/editor/2018/10/42081-15405387755616-800.jpg' // TODO FIX THIS
  ]
);


header('Location: login.php');
