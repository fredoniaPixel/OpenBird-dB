<?php
require('header.php');
require('navbar.php');
// NOT REQUIRED YET
require('auth.php');
 ?>


<h1 class="Play-Welcome"><b>Let's get started</b></h1>
<form action="dataform.php" method="post" target="_blank" class="form-horizontal">
<!-- Form Name -->
<h2>Data Entry</h2>
<!-- Text input-->
<div class="datacontainer" id="datacontainer">
<div class="control-group">
  <label class="control-label" for="textinput">Enter An Identifier:</label>
  <div class="controls">
    <input id="textinput" name="birdID" type="text" placeholder="Bird Id" class="input-small">
    <p></p>
    <label class="control-label" for="textinput">Enter The Species:</label>
    <div class="controls">
      <input id="textinput" name="species" type="text" placeholder="Species" >
      <p></p>
      <label for="sex">Sex</label>
    </div>
    <div class="col-50">
    <input id="textinput" name="sex" type="text" placeholder="Sex" >
        </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Notes</label>
  <div class="controls">
    <textarea rows="4" cols="30" id="textarea" name="textarea"> </textarea>
  </div>
</div>
    Advanced
  <input type="checkbox" name="checkboxes" id="checkboxes"  value="Option one">
<!-- Text input-->
<div id="hiddendiv" class="hiddendiv" style="display:none" class="hiddendiv">

<div class="control-group">
  <label class="control-label" for="textinput">Location Name:</label>
  <div class="controls">
    <input id="textinput" name="locName" type="text" placeholder="Enter The Location" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">City:</label>
  <div class="controls">
    <input id="textinput" name="city" type="text" placeholder="Enter The City" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">State:</label>
  <div class="controls">
    <input id="textinput" name="state" type="text" placeholder="Enter The State" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Country:</label>
  <div class="controls">
    <input id="textinput" name="country" type="text" placeholder="Enter The Country" class="input-xlarge">
  </div>
</div>

<label for="start">Captured Date:</label>
<p></p>
<input type="date" id="start" name="dates"
       value="2018-07-22"
       min="2018-01-01" max="202-12-31">
</div>
</style>

<div class="control-group">
  <div class="controls">
    <p class="help-block">Remember to double check your data!</p>
    <input name="datasubmit" type="submit" id="datasubmit_btn" value="Save Data"/><br>
  </div>
</div>
</div>
</form>

<!-- SCRIPTS PURPOSES ONLY -->

<script>
$(document).ready(function(){
$('#checkboxes').change(function(){
if(this.checked)
$('#hiddendiv').fadeIn('slow');
else
$('#hiddendiv').fadeOut('slow');

});
});
</script>

<script>
$(document).ready(function(){
    $("h1").animate({
        'font-size' : '40px',
        'opacity': '1'
    },1000);
});
</script>

 <?php
 // footer
 require('footer.php');
  ?>
