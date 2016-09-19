<?php session_start(); 

if($_SESSION['user1'] == '')
{
 $error="Please login first!";
      header("location:index.php?total=$error");
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
   <form action="" method="post">    
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
                    <tr><td align="center"><font  style="color:yellow;font-size:18">Welcome,  <?php session_start(); echo $_SESSION['user1']; ?></font></td>
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
            <div style="height:700;width:260 ;border:1px solid black;float: left;margin:auto auto auto 10;border-radius: 10">
                <br> <table border="0" width="240" align="center" bgcolor="orange" style="border-radius:8"  >
                  <tr>
                        <th style="color:white">Announcements</th>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
                        <td style="color:white">Exam Categories</td>
                    </tr><tr><td><br></td></tr>
                    <tr>
                        <td>Science & Technology
                            <ul>
                                <li><a href="gateclick.php">GATE Entrance</a></li>
                                <li><a href="">B.Tech</a></li>
                                <li><a href="it-compclick.php">IT & Computers</a></li>
                           
                             </ul>
                        </td>    
                     </tr>  
                    <tr>
                        <td>Management
                            <ul>
                                <li><a href="mbaclick.php">MBA Entrance</a></li>
                            
                                <li><a href="hrclick.php">Human Resource</a></li>
                             </ul>
                        </td>    
                     </tr>  
                      <tr>
                        <td>Language & Skills
                            <ul>
                                <li><a href="gkclick.php">General Knowledge</a></li>
                                <li><a href="aptitudeclick.php">Aptitude</a></li>
                                <li><a href="iqclick.php">IQ</a></li>
                                <li><a href="englishclick.php">English</a></li>
                             </ul>
                        </td>    
                     </tr>        
                        
                    
                </table>
            </div>
            <div style="height:700;width:620 ;border:1px solid black;float: right;margin:auto 10 auto auto;border-radius: 10">
                <br> <table width="600" height="" border="0" align="center" cellpadding="8">
                        <tr><th style="font-size: 20;color: red">Rules For Online Examination</th></tr>
                        <tr><td valign="top">
                                <ul>
                                    <li><b>Choose the category from the side menu</b></li>
                                </ul>
                            </td></tr> 
                        <tr><td valign="top">
                                <ul>
                                    <li><b>Click on the Ready button after clicking on the exam category</b></li>
                                </ul>
                            </td></tr> 
                        <tr><td valign="top"><ul>
                                    <li><b>The exam pattern is objective type with only one correct answer</b></li>
                                </ul></td></tr> 
                        <tr><td valign="top">
                                <ul>
                                    <li><b>DO NOT REFRESH THE PAGE OR PRESS BACK BUTTON..</b></li>
                                </ul>
                                <tr><td valign="top">
                                <ul>
                                    <li><b>Each Question has a timer of 60 seconds. Do click the submit button before time runs out or test will be fortfiet</b></li>
                                </ul>

                            </td></tr> 
                         <tr><td valign="top"><ul>
                                    <li><b>YOU CANNOT CHANGE THE ANSWER ONCE YOU CLICK ON SUBMIT.</b></li>
                                </ul></td></tr> 
                        <tr><td valign="top"><ul>
                                    <li><b>EACH TEST IS OF 50 MARKS</b></li>
                                </ul></td></tr>
                        <tr><td valign="top"><ul>
                                    <li><b>Each question carry equal weightage of 5 marks.</b></li>
                                </ul></td></tr>
                        <tr><td valign="top"><ul>
                                    <li><b>THERE ARE 10 QUESTIONS OF EACH SET </b></li>
                                </ul></td></tr>
                </table>
            </div>
            <div style="clear:both"></div>
	</div>
	<!-- end #page -->
	<div id="footer">
              <p>© Copyright 2015... All rights reserved.<br>TechSync Consultancy Pvt. Ltd.</br></p>
	</div>
	<!-- end #footer -->
</div>
        
</html>
<?php
if(isset($_POST['btn_logout']))
{
    session_start();
    session_destroy();
    header("location:index.php");
}
?>