
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
		<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
<?php 
 include('session.php');
if(!isset($_SESSION['login_user']))
{
header("location:index.php");
}
 ?>
 <?php 
 include('header.php')
 ?>
 <?php
include('profileupdate.php');
?>
<div class="container">
   <?php 
if($sana==1)
 {
	 echo " <div class='alert alert-warning' >
	    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	    <strong>Success!</strong>Your profile successfully updated
	  </div>";
}	  
  ?>
<div class="row">
<div class="col-md-10 ">

<form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Edit Your Profile Here</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="id">First name :</label>  
  <div class="col-md-4">
 <div class="input-group">
 
       <input id="id" name="fname" type="text" placeholder="First name" class="form-control input-md">
      </div>

    
  </div>
  

  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="id">Last name :</label>  
  <div class="col-md-4">
 <div class="input-group">
 
       <input id="id" name="lname" type="text" placeholder="Last name" class="form-control input-md">
      </div>

    
  </div>
  

  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name (Full name)</label>  
  <div class="col-md-4">
 <div class="input-group">
       <input id="Name" name="name" type="text" placeholder="Name (Full name)" class="form-control input-md" required>
      </div>

    
  </div>

  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
  <div class="col-md-4">

  <div class="input-group">

       <input id="Date Of Birth" name="dob" type="text" placeholder="DDMMYYYY" class="form-control input-md">
      </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Class:</label>  
  <div class="col-md-4">

  <div class="input-group">

       <input id="Date Of Birth" name="class" type="text" placeholder="present class" class="form-control input-md" required>
      </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Hostel</label>  
  <div class="col-md-4">

  <div class="input-group">

       <input id="Date Of Birth" name="hostel" type="text" placeholder="Present hostel" class="form-control input-md" required>
      </div>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Father">Father's name</label>  
  <div class="col-md-4">
  <div class="input-group">
      <input id="Father" name="father" type="text" placeholder="Father's name" class="form-control input-md" required>

      </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mother">Mother's Name</label>  
  <div class="col-md-4">
  <div class="input-group">
  <input id="Mother" name="mother" type="text" placeholder="Mother's Name" class="form-control input-md" required>

      </div>
    
  </div>
</div>

<!-- Multiple Radios (inline) -->

<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Address">Address</label>  
  <div class="col-md-2  col-xs-4">
  <input id="Village" name="vil" type="text" placeholder="Village" class="form-control input-md " required>
  </div>

  <div class="col-md-2 col-xs-4">

  <input id="Mondal" name="mdl" type="text" placeholder="Mondal" class="form-control input-md " required>
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Address"></label>  
  <div class="col-md-2  col-xs-4">
  <input id="dist" name="dist" type="text" placeholder="District" class="form-control input-md " required>
  <br>
   <input id="pin" name="pin" type="text" placeholder="Pin Code" class="form-control input-md " required>
  
  </div>

  

  
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
  <div class="col-md-4">
  <div class="input-group">
    <input id="Phonenumber " name="phone" type="text" placeholder="Phone number " class="form-control input-md" required>
    
      </div>
     
  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for=" parent phone number ">parent phone number </label>  
  <div class="col-md-4">
  <div class="input-group">

    <input id="parent phone number " name="dadphone" type="text" placeholder="parent phone number " class="form-control input-md" required>
    
      </div>
     
  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
  <div class="col-md-4">
  <div class="input-group">
    <input id="Email Address" name="email" type="text" placeholder="Email Address" class="form-control input-md">
    
      </div>
  
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
 <input type="submit" name="submit" value="submit">

    
  </div>
</div>

</fieldset>
</form>
</div>
</div>
   </div>
</body>

</html>

