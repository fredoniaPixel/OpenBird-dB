<?php
 // signup.php
require('header.php');
require('navbar.php');
require('dbconfig.php');
//NOT NEEDED yet
//require('dbconfig.php');
 ?>

 <!DOCTYPE html>

 <body>

    <form id="formregister" action="registerform.php"method="post" target="_blank">
     <div class="imgcontainer">

       <img src="https://www.chestnut-tree-house.org.uk/wp-content/uploads/2016/08/Mystery-person-e1470402666366.png" alt="Avatar" class="avatar">
     </div>

     <div class="row">
     <div class="container">
       Username:<br>
       <input name="name" type="text" placeholder="Username"  ><br>
       Password:<br>
       <input name="pass" type="password" placeholder="Password"  ><br>
       Confirm Password:<br>
       <input name="cpass"  type="password" placeholder="Confirm Password"  ><br>
       Address:<br>
       <input name="address"  type="text" placeholder="Address" ><br>
     </div>

     <div id="container1" class="container">
       First Name:<br>
       <input type="text" placeholder="First Name" name="first_name" ><br>
       Last Name:<br>
       <input type="text" placeholder="Last Name" name="last_name" ><br>
       Email:<br>
       <input type="text" placeholder="Email" name="email" ><br>
     </div>
   </div>

      <input name="sign_btn" type="submit" id="signbtn" value="Sign Up"/><br>
   </form>


 </body>

   <?php
  require('footer.php');
   ?>
