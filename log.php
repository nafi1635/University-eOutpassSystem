<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/log.css">
		<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
 <?php
  include('header.php');
 ?>
  <div class="container">
   <div class="col-md-11">
   <br><br><br>
    <div id="logbox">
      <form action="register.php" method="post">
        <h1>account login</h1>
        <input name="id" type="email" placeholder="enter your id" class="input pass"/>
        <input name="pwd" type="password" placeholder="enter your password" required="required" class="input pass"/>
        <input type="submit" value="Sign me in!" class="inputButton"/>
        <div class="text-center"">
                    <a href="#" id="">create an account</a> - <a href="#" id="">forgot password</a>
                </div>
      </form>
    </div>
    </div>
  </div>
