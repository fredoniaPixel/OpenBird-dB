<?php
//leaderboard.php
require('header.php');
require('navbar.php');
//NOT REQUIRED YET
require('auth.php');


 ?>


 <div id="wrapper-setting">
   <div id="content-setting">
<h1 id="Leaderboard-Welcome"><b>Welcome to the settings page, Researcher</b></h1>

 <form class="form-horizontal" action="searchuser.php" method="post">

<!-- File Button -->

  <label class="control-label" for="filebutton">Choose Profile Picture</label>
  <div class="controls">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>


<!-- Search input-->
<div class="control-group">
  <label class="control-label" for="searchinput">Search User</label>
  <div class="controls">
    <input id="searchinput" name="searchinput" type="text" placeholder="Enter User" onblur="checkAvailability()" class="input-xlarge search-query"> <span id="user-availability-status"></span>
    <p><p><img src="loaderIcon.gif" id="loaderIcon" style="display:none" /></p></p>
      <input name="request_btn" type="submit" id="request_btn" value="Request Data"/><br>
    <p class="help-block">Note: Usernames are case-sensitive!</p>
  </div>
</div>

<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "searchuser.php",
data:'searchinput='+$("username").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Make your data public to users?</label>
  <div class="controls">
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" onclick="onlyOne(this)" id="checkboxes-0" value="Option one">
      Yes
    </label>
    <label class="checkbox" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" onclick="onlyOne(this)" id="checkboxes-1" value="Option two">
      No
    </label>
  </div>
</div>

<script>
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('checkboxes')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>

<script>
$(document).ready(function(){
    $("h1").animate({
        'font-size' : '40px',
        'opacity': '1'
    },1000);
});
</script>

<!-- Button -->
  <div class="controls">
    <p></P>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Update Settings</button>
  </div>
</form>

<legend>



<form class="chill" action='delete-user.php' method="post" target="_blank">
<input type="hidden" name="username" value="'. $_SESSION['loggedInUser'].'">
<input type="submit" name="delete" value="Delete User">
     <p></p>
     <label>Note: There's No going back if you click this button</label>
     </form>
   }

   </legend>
</div>
</div>


<?php
require('footer.php');

 ?>
