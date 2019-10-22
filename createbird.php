<?php
//create-user.php
// 1. Check that the passwords are the xhprof_sample_disable
// 2. Create a user
// 3. Redirect to login

require('db.php');
require('dbconfig.php');
runSafeQuery(
  "INSERT INTO bird (username, species, sex, notes, locName, city, state, country, date)
    VALUES (?,?,?,?,?,?,?,?,?)
  ",
  [
    "sssssssss",
    $birdID,
    $species,
    $sex,
    $textarea,
    $locName,
    $city,
    $state,
    $country,
    $dates,


  //  'https://statics.sportskeeda.com/editor/2018/10/42081-15405387755616-800.jpg' // TODO FIX THIS
  ]
);
