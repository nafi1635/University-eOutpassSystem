<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/header.css">
<?php
include('session.php');

?>	

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">e-OUTpass </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
    <?php if($admin==1)
    {
    ?>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</li>
        <li><a href="#"></a></li>
           <li><a href="approvalA.php">My approvals</a></li>
            <li><a href="requestsA.php">Recieved requests</a></li>
      </ul>
      <?php
      }
      else
      {
      ?>
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</li>
        <li><a href="#"></a></li>
           <li><a href="view.php">Outpass profile</a></li>
            <li><a href="editprofile.php">Edit profile</a></li>
            <li><a href="myrequests.php">My requests</a></li>
             <li><a href="request.php">Request for outpass</a></li>
       
      </ul>
     <?php
     }
     ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <span class="caret"></span></a>
          
          <ul class="dropdown-menu" role="menu">
           <div class="col-sm-4">
			<?php
			$q="select * from student where id=$login_session;";
			$res=mysql_query($q);
			$rw=mysql_fetch_assoc($res);
			
			?>
		                                         <img src="<?php echo $rw['imagepath'];?>" style="width:100px;height:100px;border-radius:25px;">
		                        
                                                      </div>
                                                   
            <li><a href="logout.php"><b>Logout</b></a></li>
         
            <li class="divider"></li>
          
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script src="resource/jquery-1.11.0.min.js" ></script>
<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
 </body>
 </html>
