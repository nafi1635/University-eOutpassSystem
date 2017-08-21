<?php
session_start();
$error=''; 
if (isset($_POST['submit'])) 
{

   $id=$_POST['id'];
   $pwd=$_POST['pwd'];

   if(trim($id)==''&&trim($pwd)=='')
   {
   	$error="enter anything";
   }
    else
    {
       	include('dbConfig.php');
       	$admin=0;
       	$q1="select * from student where pwd='$pwd' AND bid='$id';";
        $res= mysql_query($q1);
        $rows = mysql_num_rows($res);
        if ($rows==1) 
        {
            $_SESSION['login_user']=$id;   
            header("Location:view.php");
        }
        else 
        {
           $q2="select * from admins where lid='$id' AND pwd='$pwd'";
           $res1= mysql_query($q2);
          $rows1 = mysql_num_rows($res1);
		  if ($rows1==1) 
		 {
		    $_SESSION['login_adm']=$id; 
		    $_SESSION['login_user']=$id; 
		    $_SESSION['admin']='1';
		  header("Location:requestsA.php"); // Redirecting To Other Page
		}
		else
		{
			$error="Login or password incorrect";
		}
		
        }
        mysql_close($connection);
    }
}
?>
