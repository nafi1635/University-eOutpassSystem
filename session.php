<?php
include('dbConfig.php');
session_start();
// Storing Session
$user_check=$_SESSION['login_user'];
$q2="select * from student where bid='$user_check'";
$res1=mysql_query($q2);
$row = mysql_fetch_assoc($res1);
$login_session=$row['id'];
$admin=$_SESSION['admin'];
if($admin==1)
{
	$login_adm=$_SESSION['login_adm'];	
	$a1="select * from admins where lid=$login_adm";
	$t1=mysql_query($a1);
	$rw=mysql_fetch_assoc($t1);
	$admid=$rw['id'];	   
}
//$q2="select * from users where bid='$user_check'";
//$res1=mysql_query($q2);
//$row = mysql_fetch_assoc($res1);
//$login_session =$row['uid'];
//$loginid =$row['bid'];
//$loginbranch =$row['branch'];

?>
