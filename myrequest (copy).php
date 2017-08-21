  <?php
   include('dbConfig.php');
   $id=$login_session;
   $q1="select * from complaint where uid=$id";
   $res=mysql_query($q1);
   $num=mysql_num_rows($res);
   $net=0;
   $n=0;
   ?> 
   
  <div class="col-sm-9" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Complaints</h2>
     <?php
	if($statusus==1)
	{
		
		echo "<div class='alert alert-warning'  style='width:100%;height:100px'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <h3 style='font-size:20px;text-align:center'>Status update Successfull <strong>login</strong> <a href='Make_C.php'><Strong>Home</strong></a>
					   	
	  				</div>"; 
	  		}
	  		?>
    <br>
      <?php
      if($num==0)
  	echo "<h1 style='text-align:center'>You did not post any complaints</h2>";
  	?>
    <?php
    while($row=mysql_fetch_assoc($res))
    {
    		$status=0;
    		$compid=$row['id'];
    		$sub=$row['subject'];
    		$compl=$row['complaint'];
    		$time=$row['created_at'];
    		$aid=$row['aid'];
    		$stata=$row['stata'];
    		$statu=$row['statu'];
    		if($stata==$statu)
    			$status=1;
    		$q5="select * from users where uid=$login_session";
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
    		$q4="select * from dept_name where did=$dept";
    		$res2=mysql_query($q4);
    		$row2=mysql_fetch_assoc($res2);
    		$dname=$row2['name'];
    ?>
 
    <div class="modal fade" id="myModal<?php echo $n;?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Complaint Details</h4>
        </div>
        <div class="modal-body" style="font-size:18px;">
        <b> Id : </b> <?php echo $userid;?><br>
        <b> Email : </b> <?php echo $usermail;?><br>
         <b> Subject : </b> <?php echo $sub;?><br>
          <b> Complaint : </b> <?php echo $compl;?><br>
          <b>Department :</b> <?php echo $dname;?><br>
	<b>Administrator :</b> <?php echo $adname;?><br>
	<b>Posted at :</b> <?php echo $time;?><br>
	<b>Solved Status :</b><?php if($status==1)
							echo "Yes..Successfully solved";
						else
							echo "No..Not solved yet";?></b> <br>
	<b>Update Status:</b>
	<form role="form" action="" method="post">

		    <div class="radio">
		      <label><input type="radio" name="stat" value="1" required>Solved</label>
		    </div>
		    <div class="radio">
		      <label><input type="radio" name="stat" value="0">Not Solved</label>
		    </div>
		    <div class="radio">
		    <b>Are you sure to update status ? </b>
		      <label><input type="radio" name="stat1" value="<?php echo $compid;?> " required>Yes</label>
		      <label><input type="radio" name="stat1" value="<?php echo $compid;?>">No</label>
		    </div>
		    <input type="submit" name="updatestat" value="Update" class="btn-sm btn_lblue">
	  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p<?php echo $net;$net++;?>" id="problem">+ &nbsp;<?php echo $sub;?></p>
		<div id="p<?php echo $net-1;?>" class="collapse" >
				<b>Complaint :</b> <?php echo $compl;?><br>
				<b>Posted at:</b> <?php echo $time;?><br>
				<br>
				<a href="#myModal<?php echo $n;?>"  data-toggle="modal" data-target="#myModal<?php echo $n;$n++?>" style="background:#80C5C5;border:none;" class="btn btn-warning btn-sm">View</a>
		</div>
    </div>	
    

    <?php
    }
    ?>
	<br>
	   
</div>
