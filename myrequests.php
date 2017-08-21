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
   $id=$login_session;
   $q1="select * from op where uid=$id";
   $res=mysql_query($q1);
   $num=mysql_num_rows($res);
   $net=0;
   $n=0;
   ?> 
  <div class="col-sm-11" style="padding-left:60px">
    <h3 style="text-align:center;color:brown">Your outpass requests</h3>
    <br>
      <?php
      if($num==0)
  	echo "<h3 style='text-align:center'>You did not request to any outpass</h3>";
  	?>
    <?php
    while($row=mysql_fetch_assoc($res))
    {
    		$opid=$row['id'];
    		$purp=$row['purpose'];
    		$reas=$row['reason'];
    		$time=$row['time'];
    		$aid=$row['aid'];
    		$approve=$row['approve'];
    		$q5="select * from student where id=$login_session";
    		$res3=mysql_query($q5);
    		$row3=mysql_fetch_assoc($res3);
    		$userid=$row3['bid'];
    		$usermail=$row3['email'];
    		$username=$row3['fname'];
    		$q3="select * from admins where id=$aid";
    		$res1=mysql_query($q3);
    		$row1=mysql_fetch_assoc($res1);
    		$adname=$row1['name'];
    		$dept=$row1['did'];
    		$q4="select * from issue where did=$dept";
    		$res2=mysql_query($q4);
    		$row2=mysql_fetch_assoc($res2);
    		$dname=$row2['name'];
    ?>
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p<?php echo $net;$net++;?>" id="problem">+ &nbsp;<?php echo $purp;?>
 	<?php if($approve)
 			echo "<button class='btn btn-success btn-sm' style='float:right;'>Approved</button>";  
 		   else
 		   	echo "<button class='btn btn-warning btn-sm' style='float:right;'>Not Approved</button>"; ?></p>
		<div id="p<?php echo $net-1;?>" class="collapse" >
				<b>Outpass Id :</b> <?php echo $opid;?><br>
				<b>Reason :</b> <?php echo $reas;?><br>
				<b>Posted at:</b> <?php echo $time;?><br>
				<b>Approved :</b> <?php echo $approve;?><br>
				<br>
				<a href="#myModal<?php echo $n;?>"  data-toggle="modal" data-target="#myModal<?php echo $n;$n++?>" style="background:#80C5C5;border:none;" class="btn btn-warning btn-sm">View</a>
		</div>
    </div>	
    

    <?php
    }
    ?>
	<br>
	   
</div>
</html>

