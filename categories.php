<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta name="keywords" content="" /> 
<meta name="description" content="" /> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>online examinations</title> 
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
<div id="wrapper" style="border:1px solid white;height: 980"> 
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
	<div id="page"> 
		<table id="banner" border="1"><tr><td>
                    <marquee>
                       
                       
                        <img src="images/2.jpg"/>
                        <img src="images/3.jpg"/>
                        <img src="images/5.jpg"/>
                    </marquee></td></tr></table>
		<div id="content"> 
			<div class="post"> 
				<h1 class="title">ONLINE TESTS:</h1> 
				    
                           <br><br><br><img src="images/9.jpg"width="600">    
			
			</div> 
                    <table border="0" height="180" width="400"> 
                        <br> <tr ><td> 
			
				<h4></h4></td> 
				<tr><td> 
                                        <font style="font-size:14"><ul> 
                                        <li>remote examination</li> 
                                        <li>addmission testing</li> 
                                        <li>employee skill assesement</li> 
                                        <li>virtual classroom quizess</li>
                                        <li>qualification and eligibility detemination</li>
                                         <li>self learning programs</li>
                                      <li>distance learning programs</li>
                                       <li>applicant experinence level</li>
                                 </ul></font></td></tr> 
				
                
			
                            <tr valign="center"><td ><h5>MULTIPLE APPLICATIONS,USE IT OVER AND OVER AGAIN</h5></td></tr> 
				<tr><td> 
                                    <font style="font-size:14"><ul> 
                                        <li>it offers practical solution to reach people</li> 
                                        <li>with internet you can virtually reh anyone</li> 
                                        <li>the system offers mechanism to address variety of applications</li> 
                                         
                                    </ul></font></td></tr> 
					
		
                
                            
		</td></tr></table> 
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
				</li>
                            <br>
                            <li style="color: red"><?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']; ?></li><br><br>
				<li > 
                                    New User ?<br>Register here</br> 
				</li> 
                                <li><a href="registration.php"><img src="images/new_user.gif" onmouseover="bigimg(this)" onmouseout="normalimg(this)" border="0" /></a></li>    
   
				
				
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
 
</html> 