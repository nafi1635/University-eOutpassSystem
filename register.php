<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="resource/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="resource/font-awesome.css">
   <link rel="stylesheet" href="resource/font-awesome.min.css">
      <link rel="stylesheet" href="resource/header.css">
      <link rel="stylesheet" href="regform.css">
		
<nav class="navbar navbar-default" role="navigation" >

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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</li>
        <li><a href="#"></a></li>
           <li><a href="#">Outpass Reports</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
    	<li><a href="log_in.php">Login<span class="caret"></span></a></li> 
         
            <li class="divider"></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-6" style="padding-left:400px;">
    <div id="logbox">
<?php
		if(isset($_POST['submit']))
		{
			include('dbConfig.php');
			include('getdate.php');
			$bid=$_POST['bid'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pwd=$_POST['pwd'];
			$pwd1=$_POST['pwd1'];
			if($pwd==$pwd1)
			{
				$q1 = "insert into student values('','$bid','','','$name','','$email','$pwd','','','','$current_date','','','','','','','')";
		    		$r1 = mysql_query($q1);
		    		if($r1)
		    		{
		    			echo "<div class='alert alert-success' style='width='80%';height='30%''>
							    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Success!</strong>Registered Successfully
							    <br><br><br>
							    <div class='one_half'><a href='log_in.php' id='login_form' class='btn btn_lblue'>Login</a></div>
							  </div>";
		    		}
		    		else
		    		{
		    			echo " <div class='alert alert-danger'>
							    <a href=#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Sorry !</strong>Not registered successfully
							  </div>";
		    		}
		    	}
		    	else
		    	{
		    		echo " <div class='alert alert-danger'>
							    <a href=#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Sorry !</strong>Please entered the two password correctlly
							  </div>";
		    	}	
	    	}	
	?>
    </div>
  </div>
<script src="resource/jquery-1.11.0.min.js" ></script>
<script src="resource/bootstrap.min.js" ></script>
               <script src="resource/jquery.js" ></script>
 <script src="resource/jquery.min.js" ></script>
 </body>
 </html>
<script src="resource/bootstrap.min.js"></script>
<script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>

