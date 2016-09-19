 <?php
error_reporting(E_ALL); ini_set('display_errors',1);
session_start();

if($_SESSION['user1'] == '')
{
 $error="Please login first!";
      header("location:index.php?total=$error");
}

$sql = new mysqli('localhost', 'root', '', 'tech');
 $user=$_SESSION['user1'];


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
$query="UPDATE personal_detail SET picture='$filePath' WHERE username='$user'";
$sql=mysqli_query($sql,$query);
header("location: profile.php");
}
}

if(isset($_POST['btn_save']))
{
    
 
    $sql = new mysqli('localhost', 'root', '', 'tech');
    $user=$_SESSION['user1'];
    $qry="update  personal_detail set emp_name='$_POST[name]',city='$_POST[city]',contact='$_POST[phone]',email='$_POST[email]',country='$_POST[country]',state='$_POST[state]',degree='$_POST[degree]',college='$_POST[college]',fname='$_POST[fname]' where username='$user'";
    $res=mysqli_query($sql,$qry);
    $numrows= mysqli_num_rows();
    
    
   
    if($numrows>=0)
    {
        echo "Updated succesfully!";
        
       
    }  
    else
    {
        echo "Not updated";
    }
}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<title>Online Examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
.picture {
width: 200px;
height: 167px;
margin-top: 39px;
margin-left: 28px;
border: 1px solid rgb(236, 230, 230);
background: rgb(246, 246, 246);
border-radius: 40px;
}
.choose {
width: 200px;
height: 167px;
border: 1px solid rgb(236, 230, 230);
background: rgb(246, 246, 246);
border-radius: 40px;
}
.file{position: relative;
top: 22px;
left: 46px;
background: black;
color: white;
width: 181px;}
.up{margin-left: 72px;
margin-top: 30px;
font-size: 24px;
padding: 15px;
border: none;
background: black;
color: white;
border-radius: 20px;}
.fa{position: relative;
left: 58px;
font-size: 24px;
color: black;}
</style>
</head>
<body>
    
<div id="wrapper" style="border:1px solid white;height:1000">
	<div id="header" >
		<div id="logo" >
			<h1 style="font-size:40px;font-family: Andalus;color: whitesmoke">Online Examination</h1><br>
                            <p>..key to success</p>
		</div>
            
	</div>
	<!-- end #header -->
	<div id="menu" >
           <table border="0" height="50" width="850">
                    <tr><td align="center"><font  style="color:yellow;font-size:18">Welcome, <?php echo $_SESSION['user1']; ?></font></td>
                   <td align="right">  <input type="submit" name="btn_logout" value="Log Out"/></td></tr>
           </table></div>
	<!-- end #menu -->
	<div id="page" style="height:800">
            <div style="border: 1px solid yellow;background-color: #660066">
                <table border="1" height="40" cellpadding="8" cellspacing="10" >
                <tr >    
                <td width="100" align="center" ><a href="aftrlogin.php"><span style="color: orange">Home</a></span></td>
                <td width="100" align="center"><a href="profile.php"><span style="color: orange">Profile</span></a></td>
                <td width="100" align="center" ><a href="instruction.php"><span style="color: orange">Instruction</span></a></td>
                <td width="100" align="center"><a href="result.php"><span style="color: orange">Results</span></a></td>
                </tr></table>    
            </div><br>
			<?php
			$sql = new mysqli('localhost', 'root', '', 'onlineexam');
			$qry="select * from personal_detail where username='$user'";
            $res2=mysqli_query($sql,$qry);
			$row=$res2->fetch_array(MYSQLI_NUM);
			?>
            	<div style="height:700;width:260 ;border:1px solid black;float: left;margin:auto auto auto 10;border-radius: 10">
				<div class='picture'><img src="<?=$row[11];?>" class='choose' /> </div>
              
				<form method="post" enctype="multipart/form-data"/>
				 
				<input type="file" name="Image" class="file"/><br/>
				<i class="fa fa-upload"></i><input type="submit" name="upload" class='up' value="Upload"/>
				</form>
            </div>
			<form action="" method="POST">   
            <div style="height:700;width:620 ;border:1px solid black;float: right;margin:auto 10 auto auto;border-radius: 10">
                <br> 
                    <?php include("profile-view.php"); ?>
                   <span style="margin-left:250"> <input type="submit" value="save" name="btn_save" /></span><br>
                  <span style="color: red;margin-left: 20" > <?php if(isset($_REQUEST['total'])) echo $_REQUEST['total'];?></span>
            </div>
			
            <div style="clear:both"></div>
	</div>
	
	<!-- end #page -->
	<div id="footer">
            <p>© Copyright 2015... All rights reserved.<br>Techsync Consultancy PVT. LTD.</br></p>
	</div>
	<!-- end #footer -->
</div>
    </form>

</body>      
</html>
<?php
if(isset($_POST['btn_logout']))
{
    session_start();
    session_destroy();
    header("location:index.php");
}
?>