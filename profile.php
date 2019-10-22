<?php
// profile.php
require('header.php');
require('navbar.php');
require('auth.php');
require('getprofile.php');

 ?>

 <section id="profile-content">
  <h1 id="profile-welcome">Welcome To Your Profile</h1>

<img src="https://www.chestnut-tree-house.org.uk/wp-content/uploads/2016/08/Mystery-person-e1470402666366.png" alt="Avatar" class="avatar">

<?php $user = $_SESSION['loggedInUser'];
echo $user['username']; ?>'s Current Data ... <h1>

  <table border="1">
  <tr>
    <th>Username</th>
    <th>Species</th>
    <th>Sex</th>
    <th>Notes</th>
    <th>Loc-Name</th>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
    <th>Date</th>
  </tr>
  <tr>

    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['species'] ?></td>
    <td><?php echo $row['sex'] ?></td>
    <td><?php echo $row['notes'] ?></td>
    <td><?php echo $row['locName'] ?></td>
    <td><?php echo $row['city'] ?></td>
    <td><?php echo $row['state'] ?></td>
    <td><?php echo $row['country'] ?></td>
    <td><?php echo $row['date'] ?></td>


</tr>
</table>
</section>


<script>
$(document).ready(function(){
    $("h1").animate({
        'font-size' : '40px',
        'opacity': '1'
    },1000);
});
</script>

 <?php
 // profile.php
 require('footer.php');
  ?>
