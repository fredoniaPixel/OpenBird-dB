<?php
require('header.php');
require('navbar.php');
// NOT REQUIRED YET
//require('auth.php');
 ?>

<section id="profile-content">
 <h1 id="profile-welcome">This is the data that has been shared with you</h1>

<img src="https://www.chestnut-tree-house.org.uk/wp-content/uploads/2016/08/Mystery-person-e1470402666366.png" alt="Avatar" class="avatar">

<!--- <h1> <?php $user = $_SESSION['loggedInUser'];
echo $user['username']; ?>'s Current Data ... <h1> -->


 <table border="1">
 <tr>
   <th>user</th>
   <th>RFID-Tag</th>
   <th>Species</th>
   <th>Sex</th>
   <th>Location</th>
 </tr>
 <tr>

   <td>N/a</td>
     <td>N/A</td>
     <td>N/A</td>
     <td>N/A</td>
     <td>N/A</td>
   </tr>


   </table>
   </section>

 <?php
 // footer
 require('footer.php');
  ?>
