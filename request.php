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
 include('requestsend.php')
 ?>
<div class="col-sm-12" id="hi" style="padding-left:100px">
<form class="form-horizontal" action=""  method="post">

<fieldset>
 <div class="form-group">
  <?php
 if($success==1)
 {
	 echo " <div class='alert alert-success' >
	    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	    <strong>Success!</strong>Your complaint posted succesfully. Your problem will resolve soon
	  </div>";
}	  
  ?>
 <?php
    include('dbConfig1.php');
    $query = $db->query("SELECT * FROM issue;");  
    $rowCount = $query->num_rows;
    ?>
    <label class="col-md-4 control-label" for="selectbasicTypeTour">Select Issue</label>
    <div class="col-md-4">
    <select name="country" id="country" class="form-control">
        
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">dept not available</option>';
        }
        ?>
        </select>
        <br>


<div class="form-group">
  <div class="col-md-4">
    <label class="col-md-4 control-label" for="select_warden">Select Warden</label>
    <select  name="state" id="state" class="form-control">
  	<option value="">Select Administrator</option>
    </select>
  </div>
</div>



<!-- Select Basic -->


<!-- purpose -->
<div class="form-group">
  <label class="col-md-4 control-label" for="purpose">Purpose</label>  
  <div class="col-md-12">
  <input id="purpose" name="purpose" placeholder="write your purpose here" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Reason -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Reason</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="reason" name="reason"></textarea>
  </div>
</div>

<!-- date format -->
<div class="form-group">
  <label class="col-md-4 control-label" for="fdate">From Date</label>  
  <div class="col-md-12">
  <input id="fdate" name="fdate" placeholder="YYYY-MM-DD" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="todate">To Date</label>  
  <div class="col-md-12">
  <input id="todate" name="todate" placeholder="YYYY-MM-DD" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- No of days -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ndays">Number Of days</label>  
  <div class="col-md-12">
  <input id="ndays" name="ndays" placeholder="Enter number of days to leave" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonSelect"></label>
  <div class="col-md-8">
    <input type="submit" id="buttonSelect" name="submit" value="Submit" class="btn btn-info">
    <input type="submit" id="buttonDiscount" name="cancel" value="Reset" class="btn btn-success">
    
  </div>
</div>
</div>
</fieldset>
</form>
</html>

