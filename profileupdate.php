<?php
$sana=0;
if(isset($_POST['submit']))
{
	 include('session.php');
	include('dbConfig.php');
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$class=$_POST['class'];
		$hostel=$_POST['hostel'];
		$father=$_POST['father'];
		$mother=$_POST['mother'];
		$vil=$_POST['vil'];
		$mdl=$_POST['mdl'];
		$dist=$_POST['dist'];
		$pin=$_POST['pin'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$parent=$_POST['dadphone'];		
	$SQL = "UPDATE student SET firstname='$fname', lastname='$lname',name='$name',bday='$dob',email='$email',class='$class',hostel='$hostel',phone='$phone',vil='$vil',mdl='$mdl',dist='$dist',post='$pin',parent='$parent' WHERE id='$login_session'";
	$result = mysql_query($SQL);
	if($result)
	        {
		 $sana=1;
		 }
}
?>
