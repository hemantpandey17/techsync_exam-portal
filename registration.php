<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
$sql = new mysqli('localhost', 'root', '', 'tech');



if(isset($_POST['btn_create']))
{
$user=$_POST['txt_username'];
$paswd=$_POST['txt_password'];
$nam=$_POST['txt_name'];
$em=$_POST['txt_email'];
$phn=$_POST['txt_phone'];
$coun=$_POST['txt_country'];
$encpass= md5($paswd);
 $query = "INSERT INTO personal_detail(username,password,emp_name,email,contact,country) VALUES('$user','$encpass','$nam','$em',$phn,'$coun')";
$success=mysqli_query($sql,$query);			  
			
   
   
    if($success)
    {
        echo "Account created.";
    }
   
}


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>online examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    
<div id="wrapper" style="border:1px solid white">
	<div id="header" >
		<div id="logo" >
			<h1 style="font-size:40px;font-family: Andalus;color: whitesmoke">Online Examination</h1><br>
                            <p>..key to success</p>
		</div>
            
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="online-tests.php">Online Tests</a></li>
		
			<li><a href="#">Categories</a></li>
			<li><a href="examalerts.php">Exam Alerts</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
            <form action="" method="POST" target="">
		<table border="0" height="500" style="border-radius: 8px" align="center">
                    <tr><td><div style="width:800px;height:800px; border:1px solid black;border-radius: 8px;">
                                <table border="0" width="780px" align="center">
                                    <tr>
                                        <td><br>
                                            <b>Create a new account</b>
                                        </td>
                                    </tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Username:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td><input type="text" name="txt_username" value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Password:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td><input type="password" name="txt_password" value="" size="60" /></td></tr>
                                      <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Email Address:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td><input type="email" name="txt_email" value="" size="60" /><br><font style="font-size: 10px">Your email address is only visible to us.It is not visible to other users and crawlers.</font></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Your Name:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td><input type= "text" name="txt_name" value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">What country do you currently live in ?:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td >
                                            <input type="text" name="txt_country" value="" size="60" />
                                            </td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Your State:</td>
                                    </tr>
                                    <tr><td><input type="text" name="txt_state" value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Your City Name:</td>
                                    </tr>
                                    <tr><td><input type="text" name="txt_city" value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Your Contact No:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td><input type="text" name="txt_phone" value="" size="60" /></td></tr>
                                    
                                    
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">Highest Degree Earned:</td>
                                    </tr>
                                    <tr><td><input type="text" name="txt_degree" value="" size="60" /></td></tr>
                                    
                                    <tr><td><input type="submit" value="Create new account" name="btn_create" /></td></tr>
                                    <tr><td><font style="font-size:10px">Fields marked with <span style="color:red">*</span> are mandatory to be filled</font></td></tr>
                                <tr><td style="color:red"><?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']; ?></td></tr>
                                </table> 
                                
                                
                                </div></td></tr>
                </table>
            </form>
	</div>
	<!-- end #page -->
	<div id="footer">
            <p>© Copyright 2015... All rights reserved.<br>Techsync consultancy 
			pvt.ltd.</br></p>
	</div>
	<!-- end #footer -->
</div>

</html>
