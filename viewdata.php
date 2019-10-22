<?php
require('db.php');
?>

<?php
require('dbconfig.php');

$user = $_SESSION['loggedInUser'];
echo $user['username'];
$sql = "UPDATE bird
SET points = $totalPoints + points, games = games + $totalGames, wins = $wins+wins WHERE username = " .
"'" . $user['username'] . "'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " .mysqli_error($conn);
}

mysqli_close($conn);

 ?>
