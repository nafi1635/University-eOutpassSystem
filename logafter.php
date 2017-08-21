<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
		<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
               <script type="text/javascript" src="resource/jquery.min.js"></script>
                <script type="text/javascript" src="resource/onchange.js"></script>
  <?php 
 include('session.php');
if(!isset($_SESSION['login_user']))
{
header("location:index.php");
}
if($admin==1)
{
	echo "admin";
	echo $admid;
}	
?>

 <?php 
 include('header.php')
 ?>

	   
</div>
</html>

