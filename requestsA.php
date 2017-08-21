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
 include('approve.php')
 ?>
  <?php
   include('dbConfig.php');
   $id=$admid;
   $q1="select * from op where aid=$id";
   $res=mysql_query($q1);
   $num=mysql_num_rows($res);
   $net=0;
   $n=0;
   ?> 
   
  <div class="col-sm-11" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Your outass requests</h2>
    
    <br>
      <?php
      if($num==0)
  	echo "<h3 style='text-align:center'>You did not request to any outpass</h3>";
  	?>
  	    			<?php 
    			
    			if($approved)
    			{
	    		 echo " <div class='alert alert-success' >
		    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		    <strong>Successfully !</strong>Done<br><b>Outpass Id:$outid</b>
		  </div>";
		  } ?>
		  
    <?php
    while($row=mysql_fetch_assoc($res))
    {
    		$opid=$row['id'];
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
    		$dorm=$row3['hostel'];
    		$phone=$row3['phone'];
    		$name=$row3['name'];
    		$class=$row3['class'];
    		
  
    ?>
    <div class="well well-sm">

 	<p data-toggle="collapse" data-target="#p<?php echo $net;$net++;?>" id="problem">+ &nbsp;<?php echo $purp;?>
 	
 	<?php echo $purp;?>
 	<?php if($approve)
 			echo "<button class='btn btn-success btn-sm' style='float:right;'>Approved</button>";  
 		   else
 		   	echo "<button class='btn btn-warning btn-sm' style='float:right;'>Not Approved</button>";  	?></p>
		<div id="p<?php echo $net-1;?>" class="collapse" >
				<b>Outpass id:</b> <?php echo $opid;?><br>
				<b>Requested by:</b> <?php echo $userid;?><br>
				<b>Name:</b> <?php echo $name;?><br>
				<b>Class :</b> <?php echo $class;?><br>
				<b>dorm :</b> <?php echo $dorm;?><br>
				<b>Email :</b> <?php echo $email;?><br>	
				<b>Purpose :</b> <?php echo $userid;?><br>
				<b>Reason :</b> <?php echo $reas;?><br>
				<b>Posted at:</b> <?php echo $time;?><br>
				
				<form action="" method="post">
				<?php if(!$approve)
				{
				?>
						<b>Are you want to approve this</b>
					
						<div class="radio">
		  					<label><input type="radio" name="val" value="1" required>Yes</label>
						</div>
					<div class="radio">
		  				<label><input type="radio" name="val" value="0" required>No</label>
					</div>
					<div class="radio">
		  					<label><input type="radio" name="val1" value="<?php echo $opid;?>" required><b>Click for Sure:</b></label>
						</div>
						<input type="submit" name="approve" class="btn btn-success btn-sm" value="Approve this" style="background:#80C5C5;border:none;" > 
				</form>
				<?php
				}
				?>

		</div>
</div>	
    

    <?php
    }
    ?>
	<br>
	   
</div>
</html>

