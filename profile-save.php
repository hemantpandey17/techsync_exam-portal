 <?php
error_reporting(E_ALL); ini_set('display_errors',1);
session_start();

if($_SESSION['user1'] == '')
{
 $error="Please login first!";
      header("location:index.php?total=$error");
}

$sql = new mysqli('localhost', 'root', '', 'onlineexam');


if(isset($_POST['upload']))
{
$filename =  $_FILES['Image']['name'];
$uploadDir = 'profile-pictures/';
if($filename!='')
{$filePath = $uploadDir . $filename;
$tmpname =  $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpname,$uploadDir.$filename);

@extract($_POST);
 $user=$_SESSION['user1'];
$query="UPDATE personal_detail SET Image='$filePath' WHERE username='$user'";
$sql=mysqli_query($sql,$query);
header("location: profile.php");
}
}

if(isset($_POST['btn_save']))
{
    session_start();
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
    $user=$_SESSION['user1'];
    $qry="update  personal_detail set emp_name='$_POST[name]',city='$_POST[city]',contact='$_POST[phone]',email='$_POST[email]',country='$_POST[country]',state='$_POST[state]',degree='$_POST[degree]',college='$_POST[college]',fname='$_POST[fname]' where username='$user'";
    $res=mysql_query($qry);
    $numrows= mysql_affected_rows();
    
    
   
    if($numrows>=0)
    {
        $result="updated successfully";
        header("location:profile.php?total=$result");
        
       
    }  
    else
    {
        $result='not updated';
        header("location:profile.php?total=$result");
    }
}


if(isset($_POST['btn_logout']))
{
    session_start();
    session_destroy();
    header("location:index.php");
}


?>