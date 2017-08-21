<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/header.css">
      <link rel="stylesheet" href="resource/log.css">
 <?php
include('session.php'); 
?>		
<?php
include('navbar.php');
?>
<?php
include('login.php');
?>
   <div class="col-md-11">
   <br><br><br>
    <div id="logbox">
      <form action="" method="post">
        <h1>account login</h1>
        <input name="id" type="" placeholder="enter your id" class="input pass"/>
        <input name="pwd" type="password" placeholder="enter your password" required="required" class="input pass"/>
        <input type="submit" value="Sign me in!" name="submit" class="inputButton"/>
        <div class="text-center"">
                    <a href="regform.php" id="">create an account</a> - <a href="#" id="">forgot password</a>
                </div>
             <h5 style="color:red;">   <?php echo $error;?></h5>
      </form>
    </div>
    </div>
  </div>
</div>
<script src="resource/jquery-1.11.0.min.js" ></script>
<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
 </body>
 </html>
