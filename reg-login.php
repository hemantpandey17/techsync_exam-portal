<?php
session_start();
if(isset($_POST['btn_create']))
{
include "db.php";
mysql_connect(HOST,USERNAME,PASSWORD);
mysql_select_db(DATABASE);
$user=$_POST['txt_username'];
$paswd=$_POST['txt_password'];
$nam=$_POST['txt_name'];
$em=$_POST['txt_email'];
$phn=$_POST['txt_phone'];
$coun=$_POST['txt_country'];
$encpass=md5('$paswd');

if($user!='' && $encpass!='' && $nam!='' && $em!='' && $phn!='' && $coun!='')
{
    $flag=0;
    $len=strlen($user);
    $var=array();
    $var=  str_split($user);
    for($i=0;$i<$len;$i++)
    {
        if($var[$i]==' ')
        {
            $flag=1;
        }
    }
    if($flag==1)
    {
        echo "username cannot contain space";
    }
    else if($flag==0)
    {
        $qry1="select * from personal_detail where username='$user'";
        $res1=mysql_query($qry1);
        $numrow1=  mysql_affected_rows();
        if($numrow1>0)
        {
            $result="username not available";
            header("location:register-login.php?total=$result");
        }
        else
        {
        $qry="insert into personal_detail values ('$_POST[txt_username]','$encpass','$_POST[txt_name]','$_POST[txt_email]','$_POST[txt_city]','$_POST[txt_state]','$_POST[txt_country]','$_POST[txt_phone]',' ',' ',' ')";
        $res=mysql_query($qry);
        $numrow=  mysql_affected_rows();
            if($numrow>0)
            {
            $result="Registration Successful--!";
            header("location:index.php?total=$result");
            }
             else
            {
            $result="* Registration Failed";
            header("location:register-login.php?total=$result");
            }
        }
     }
}
else
{
         $result="Field with * cannot be left blank";
         header("location:register-login.php?total=$result");
    
}
}
else if(isset($_POST['btn_login']))
{
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
    $user1=$_POST['text_user'];
    $paswd=$_POST['text_pass'];
    $encpass=md5('$paswd');
    $_SESSION['user1']=$user1;
    if($user1!='' && $encpass!='')
{
    $qry="select * from personal_detail where username='$user1' and password='$encpass'";
    $res=mysql_query($qry);
    $row= mysql_affected_rows();
    if($row>0)
    {
        header("location:aftrlogin.php");
    }
    else
    {
         $result="invalid username/password";
         header("location:register-login.php?total1=$result");
    }
}
 else
     {
     $result="enter username/password";
     header("location:register-login.php?total1=$result");
     }
}
?>
