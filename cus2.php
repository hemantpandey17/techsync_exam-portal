
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
   
    function bigimg(x)
    {
    x.style.height="140px";
    x.style.width="150px";
    }
    function normalimg(x)
    {
        x.style.width="130px";
        x.style.height="125px";
    }
    </script>
</head>
<body>
    <form action="login.php " method="post" target="">   
<div id="wrapper" style="border:1px solid white;height:1000" >
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
			
			<li><a href="categories.php">Categories</a></li>
			<li><a href="examalerts.php">Exam Alerts</a></li>
			<li><a href="cus2.php">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page" style="height:800">
		<table id="banner" border="1"><tr><td>
                    <marquee>
                       
                       
                        <img src="images/2.jpg"/>
                        <img src="images/3.jpg"/>
                        <img src="images/5.jpg"/>
                    </marquee></td></tr></table>
		<div id="content">
			<div class="post">
				<h1 class="title">Feel Free To Contact Us</h1>
				
				<div class="entry">
					<table border="1" width="200">
                    <tr>
					<th>Admins</td>
                      <th>Name</td>
                      <th>E-mail</td>
                      <th>Phone</td>
                    </tr>
					<font color="red">
                    <tr>
					<td><img src="hemant.jpg" height="65" width="70"></td>
                      <td height="20%">Hemant Pandey</td>
                      <td>hemant.pandey17@gmail.com</td>
                      <td>+91 9582705331<br />
                       
                    </td>
                    </tr>
                    <tr>
					<td align="center"><img src="bhav.jpg" width="65" height="70"/>
                      <td>Bhavya Bhatia</td>
                      
                      <td>bhavya.bhata01@gmail.com</td>
                      <td>+91-522-8596586</td>
                      
                    
                    
					 
					 
                    </font>
                  </table>
				</div>
			</div>
			
			</div>
				
				
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					Username<br>
					<input type="text" name="text_user"/><br>
                                        Password<br>
                                        <input type="password" name="text_pass"/><br>
                                        <input type="submit" name="btn_login" value="Login"/>    
				</li><br><li style="color: red"><?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']; ?></li><br>
                            <li style="color: red"></li><br>
				<li >
                                    
				</li>
                                <li><a href="www.techsync.in">
								<img src="log.jpg" onmouseover="bigimg(this)" onmouseout="normalimg(this)" border="0" height="113" width="244" /></a></li>    
				
				
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
            <p>© Copyright 2015... All rights reserved.<br> TechSync Consultancy PVT LTD</br></p>
	</div>
	<!-- end #footer -->
</div>
    </form></body>       
</html>
