<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/view.css">
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
include('header.php');
?>

<?php
if($files)
    	{
	    		 echo " <div class='alert alert-success' >
		    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		    <strong>Successfully !</strong>Done<br><b>Profile updated successfull</b>
		  </div>";
	} 
 ?>
   <div class="col-sm-11" style="padding-left:330px">
	<div class="row">
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Your outpass profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
       <div class="box-body">
           <!----          <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
   <!--             <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>

           
     
                
                                 
                     
                     </div>
              
              <br>
    
       
            </div>--->
            <?php 
           
            include('dbConfig.php');
            $a1="select * from student where id=$login_session";
            $r1=mysql_query($a1);
            $rw=mysql_fetch_assoc($r1);
            
            ?>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo $rw['firstname'].'  '.$rw['lastname'];?></h4></span>
                      
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7 col-xs-6 "><?php echo $rw['phone'];?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Parent Mobile:</div><div class="col-sm-7 col-xs-6 "><?php echo $rw['parent'];?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Hostel:</div><div class="col-sm-7"> <?php echo $rw['hostel'];?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Class :</div><div class="col-sm-7"><?php echo $rw['class'];?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " ><b>Address:</b></div><d/up.phpiv class="col-sm-7"></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Village:</div><d/up.phpiv class="col-sm-7"><?php echo $rw['vil'];?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mondal : </div><div class="col-sm-7"><?php echo $rw['mdl'];?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >District:</div><div class="col-sm-7"><?php echo $rw['dist'];?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Pincode:</div><div class="col-sm-7"><?php echo $rw['post'];?></div>
<br><br>
<a href="request.php" class="btn" style="padding:10px 10px;background:#5F9EA0;color:white">Request an outpass</a>
<a href="myrequests.php" class="btn" style="padding:10px 10px;background:#5F9EA0;color:white">My requests</a>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            <!--   <b>Upload your profile</b>
               
					 <form action="FileUpload.php" method="post" >
							<br>
							<input type="file" name="this"  id="this" >
				
							<input type="submit" value="Save" name="fileup" style="padding:10px 10px;background:#5F9EA0">
					</form>
                       -->
        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>

</html>


         
