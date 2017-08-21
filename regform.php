<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/header.css">
      <link rel="stylesheet" href="resource/regform.css">
		
<?php
include('navbar.php');
?>
<div class="col-md-6" style="padding-left:400px;">
    <div id="logbox">

      <form id="signup" method="post" action="register.php">
        <h1>create an account</h1>
<input name="bid" type="text" placeholder="What's your userid?" pattern="^[bB]{1}[0-9]{6}\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
        <input name="name" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>   
        <input name="pwd" type="password" placeholder="Choose a password" required="required" class="input pass"/>
        <input name="pwd1" type="password" placeholder="Confirm password" required="required" class="input pass"/>
        <input name="email" type="email" placeholder="Email address" class="input pass"/>
        <input type="submit" value="Sign me up!" class="inputButton" name="submit"/>
        <div class="text-center">
            already have an account? <a href="log_in.php" id="login_id">login</a>
        </div>
      </form>
    </div>
   </div> 
<script src="resource/jquery-1.11.0.min.js" ></script>
<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
 </body>
 </html>
