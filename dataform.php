<?php
// variables
$birdIDErr = $speciesErr = $sexErr = $textareaErr = $locNameErr = $cityErr =$stateErr = $countryErr = $datesErr= "";
$birdID = $species = $sex = $textarea = $locName = $city = $state = $country = $dates = "";

//$con = mysqli_connect("localhost","root","") or die("Unable to connect");
//mysqli_select_db($con, 'popdb');

// check if we're using post
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  //CHECK IF THE NAME IS EMPTY
  if (empty($_POST["birdID"]))
{
  $nameErr = "birdID is required ";
}
else
{
  $birdID=sanitize_data($_POST["birdID"]);
  // check if name only contains letters and whitespace
  if (!is_numeric($birdID))
  {
    $birdIDerr = "Only numbers allowed";
  }
}

// Check if the password is saved, not empty, and sanitize_data
if (empty($_POST["species"]))
{
  $speciesErrErr = "Your password is empty";
}
else
{
  $species = sanitize_data($_POST["species"]);
  $species = $_POST['species'];
  if (strlen($_POST["species"]) < '4')
  {
    $speciesErr = "Your species needs more names!";
  }
}

if (empty($_POST["sex"]))
{
  $sexErr = "What's the sex of your BIRD";
}
else
{
  $sex = sanitize_data($_POST["sex"]);
}

if (empty($_POST["textarea"]))
{
  $textareaErr = "Why is your notes empty";
}
else
{
  $textarea = sanitize_data($_POST["textarea"]);
}

if (empty($_POST["locName"]))
{
  $locNameErr = "Location name is required";
}
else
{
  $locName = sanitize_data($_POST["locName"]);

}

if (empty($_POST["city"]))
{
  $cityErr = "An city is required ";
}
else
{
  $city=sanitize_data($_POST["city"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z]*$/",$city))
  {
   $cityErr = "Only letters and white space allowed";
  }
}

if (empty($_POST["state"]))
{
$stateErr = "State is required ";
}
else
{
$state=sanitize_data($_POST["state"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z]*$/",$state))
{
  $stateErr = "No white spaces allowed - State";
}
}

if (empty($_POST["country"]))
{
$countryErr = "Country is required ";
}
else
{
$country=sanitize_data($_POST["country"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z]*$/",$country))
{
  $countryErr = "Only letters and white space allowed";
}
}

if (empty($_POST["dates"]))
{
$datesErr = "How did you even enter no date... ";
}
else
{
$dates=sanitize_data($_POST["dates"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dates))
{
  $datesErr = "Only correct date format allowed";
}
}

}
else
{
  die("Damn....");
}

if (!empty($birdIDErr) || !empty($speciesErr) || !empty($textareaErr) || !empty($locNameErr) || !empty($cityErr)  || !empty($stateErr)  || !empty($countryErr || !empty($datesErr)))
{
  echo($birdIDErr ."\n");
  echo($speciesErr ."\n");
  echo($textareaErr ."\n");
  echo($locNameErr ."\n");
  echo($cityErr ."\n");
  echo($stateErr ."\n");
  echo($countryErr ."\n");
  echo($datesErr ."\n");
}

//this functions takes in the input data and makes it safe to put into our database
function sanitize_data($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>

 <?php
 require('createbird.php');
  ?>
