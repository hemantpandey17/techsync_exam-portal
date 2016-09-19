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


        $qry1="select * from personal_detail where username='$user'";
        $res1=mysql_query($qry1);
        $numrow1=  mysql_affected_rows();
$encpass=md5('$paswd');
        
        $qry="insert into personal_detail values ('$_POST[txt_username]','$encpass','$_POST[txt_name]','$_POST[txt_email]','$_POST[txt_city]','$_POST[txt_state]','$_POST[txt_country]','$_POST[txt_phone]',' ','$_POST[txt_degree]',' ')";
		if($qry) { echo "yessssssssss!!!!!!!"; }
        $res=mysql_query($qry);
        $numrow=mysql_affected_rows();
            if($numrow>0)
            {
          $result="REGISTRATION SUCCESSFUL";
  header("location:index.php?total=$result");
            }
             else
            {
           $result="* REGISTRATION FAILED";
           header("location:registration.php?total=$result");
            }
        
}
?>
