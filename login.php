<?php
session_start();
if(isset($_POST['btn_login']))
{
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
    $user1=$_POST['text_user'];
    $paswd=$_POST['text_pass'];
	$pas= md5($paswd);
	
    $_SESSION['user1']=$user1;
    if($user1!='' && $pas!='')
{
    $qry="select * from personal_detail where username='$user1' and password='$pas'";
    $res=mysql_query($qry);
    $row= mysql_affected_rows();
    if($row)
    {
        header("location:aftrlogin.php");
    }
    else
    {
           
      $result="Invalid username/password";
      header("location:index.php?total=$result");
	  
    }
}
 else
     {
     $result="Enter username/password";
     header("location:index.php?total=$result");
     }
}
?>
