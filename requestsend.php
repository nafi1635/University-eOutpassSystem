<?php
 include('session.php');
 $success=0;
if(isset($_POST['submit']))
{	
	include('dbConfig.php');
	$aid=$_POST['state'];
	$purpose=$_POST['purpose'];
	$reason=$_POST['reason'];
	$fdate=$_POST['fdate'];
	$tdate=$_POST['todate'];
	$ndays=$_POST['ndays'];
	$uid=$login_session;
	include('getdate.php');
	$SQL = "insert into op values('','$aid','$uid','$purpose','$reason','$fdate','$tdate','$ndays','$current_date','','')";
       $result = mysql_query($SQL);
            if($result)
	            {
	            	$success=1;
	            }	

}			
?>
