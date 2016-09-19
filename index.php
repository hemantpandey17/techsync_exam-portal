<?php session_start(); ?>
<html>
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
			
			<li><a href="categories.php">Categories</a></li>
			<li><a href="examalerts.php">Exam Alerts</a></li>
			<li><a href="cus2.php">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<table id="banner" border="1">
                    <marquee>
                       
                       
                       <img src="images/2.jpg"/>
                        <img src="images/3.jpg"/>
                        <img src="images/5.jpg"/>
                    </marquee></table>
		<div id="content">
			<div class="post">
				<h1 class="title">Welcome to Online Exam Portal</h1>
				
				<div class="entry">
					<p>The <strong>Online Examination System</strong>,will permit to take and give online examination and maintaining master information and generating various reports of test.The main users of this project are Student or Member and System Administrator. From an end-user perspective, the e Examination System Project consists of enhanced Member modules for registration, giving examination, manage profile. </p>
					<p><strong>Member and Examination Module </strong>- An enhanced interface for student to registration, edit profile, login, select examination, and give examination, view results, view answers Following modules pages are available for members.</p>
                                        <p><strong>Administration and Question Bank Module - Administration module</strong>- used to enter and edit examination details, question banks, maintain the members and view the reports</p>
                                        <p><strong>Online examination</strong> is getting popular on web these days. This feature is particularly useful for those websites which deal in education/ recruitment/ employee screening process. Now-a- days institutes are organizing exams online. In this module a user can give online exam of a particular subject and get the results instantly through which the user can know his/her potential and how much more effort he/she needs to put in to get better marks.</p>
				</div>
			</div>
			<div class="post">
				<h2 class="title">Advantages of OES</h2>
				<div class="entry">
                                    <ul>
                                        <li>Proctors can register to administer the online exam right from their computer</li>
                                        <li>Online exam classes can be created in minutes and proctored immediately</li>
                                        <li>Class progress can be monitored during the exam</li>
                                        <li>Access exam results instantly</li>
                                        <li>Upon completion of the exam, examinees are notified whether they have passed the exam</li>
                                        <li>Once the entire class is finished, exam results are accessible instantly</li>
                                       
                                    </ul>
				</div>
			</div>
			<div class="post">
				
				<div class="entry">
					<p>The task of instantly producing questions from resources for academic exercise and evaluation. Our approach is to over generate questions. We use personally written rules to perform a series of general purpose syntactic changes (e.g., subject-auxiliary inversion) to turn declarative phrases into questions. The top-ranked concerns could be strained and improved by teachers, or given directly to students for exercise</p></div>
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
				</li>
                            <li style="color: red"><?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']; ?></li><br>
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
            <p>© Copyright 2015... All rights reserved.<br>TechSync Consultancy 
pvt. ltd.</br></p>
	</div>
	<!-- end #footer -->
</div>
    </form></body>       
</html>
