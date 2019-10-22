
<?php
//index.php
require('header.php');
require('navbar.php');
require('dbconfig.php');
require('auth.php');
//NOT REQUIRED yet
//require('auth.php');
 ?>
 <div class="fadeIn">
  <h1 align="center" id="welcome" class="welcome"><b>Welcome Back, Researcher!</b></h1>
</div>

<script>
$(document).ready(function(){
    $("h1").animate({
        'font-size' : '40px',
        'opacity': '1'
    },1000);
});
</script>

<div id="wrapper-index">
  <div id="content-index">

<div class="btn-group" id="Data-Categories">
<input type="button" class="btnadd" onclick="location.href='data.php';" value="Add Data" />
<input type="button" class="btnview" onclick="location.href='profile.php';" value="View Data" />
<input type="button" class="btnapprove/request" onclick="location.href='setting.php';" value="Approve / Request Data" />
<input type="button" class="shareddata" onclick="location.href='shareddata.php';" value="Shared Data" />
</div>

</div>
</div>

 <?php
 // footer
 require('footer.php');
  ?>
