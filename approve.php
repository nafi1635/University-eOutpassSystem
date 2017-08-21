<?php
$approved=0;
if (isset($_POST['approve'])) 
{
	$outid=$_POST['val1'];
	$va=$_POST['val'];
	include('getdate.php');
	$q="update op set approve=$va where id=$outid ";
	$res=mysql_query($q);
	if($res)
		$approved=1;
}
?>
