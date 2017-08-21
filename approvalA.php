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
 ?>
 <?php 
 include('header.php')
 ?>
  <?php
   include('dbConfig.php');
   $id=$admid;
   $s=0;
   $q1="select * from op where aid=$id";
   $res=mysql_query($q1);
   $num=mysql_num_rows($res);
   $net=0;
   $n=0;
   ?> 
   
  <div class="col-sm-10" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Your outass requests</h2>
    <br>
      <?php
      if($num==0)
  	echo "<h3 style='text-align:center'>You did not request to any outpass</h3>";
  	?>
    <?php
    while($row=mysql_fetch_assoc($res))
    {
    		$opid=$row['id'];
    		$appdate=$row['appdate'];
    		$uid=$row['uid'];
    		$purp=$row['purpose'];
    		$reas=$row['reason'];
    		$time=$row['time'];
    		$aid=$row['aid'];
    		$approve=$row['approve'];
    		$q5="select * from student where id=$uid";
    		$res3=mysql_query($q5);
    		$row3=mysql_fetch_assoc($res3);
    		$userid=$row3['bid'];
    		$usermail=$row3['email'];
    		$username=$row3['fname'];
  		if($approve)
  		{
    ?>
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p<?php echo $net;$net++;?>" id="problem">+ &nbsp;Outpass Id:<?php echo $opid;?>
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved Date:<?php echo $appdate;?>
 	<?php if($approve)
 			echo "<button class='btn btn-success btn-sm' style='float:right;'>Approved</button>";  
 		   else
 		   	echo "<button class='btn btn-warning btn-sm' style='float:right;'>Not Approved</button>";  	?></p>

    </div>	
    

    <?php
  		  }
    }
    ?>
	<br>
	   
</div>
</html>

