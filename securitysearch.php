<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
  

		<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
<?php 
include('header.php');
?>
<?php
$error="";

include('session.php');
if(isset($_POST['sub']))
{
	$opid=$_POST['id'];
	$q1="select * from op where id=$opid";
	$res=mysql_query($q1);
	if(!$res)
		$error="Outpass id not found";
	$rw=mysql_fetch_assoc($res);
	$appr=$rw['approve'];
	if($appr)
	    		 echo " <div class='alert alert-success' >
		    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		    <b>Yes found</b>
		  </div>"; 
	else
		 echo " <div class='alert alert-success' >
		    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		    <b>No not found</b>
		  </div>"; ;	
		
}
?>
            </html>

