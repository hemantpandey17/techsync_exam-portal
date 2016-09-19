
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
    function validateForm() {
        return checkPhone();
    }
    function checkPhone() {
        var phone = document.forms["myForm"]["phone"].value;
        var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
            if(phone.value.match(phoneNum)) {
                return true;
            }
            else {
                document.getElementById("phone").className = document.getElementById("phone").className + " error";
                return false;
            }
        }
</script>
</head>
<body>
    <form action="reg-login.php" method="POST" target="">  
<div id="wrapper" style="border:1px solid white ;height: 1010">
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
	<div id="page" style="height: 810;border:1px solid black"><br>
                <table border="0">
                    <tr><td>
            <div style="width:500;height:780;border: 1px solid black;border-radius: 10">
                <table border="0" width="450" align="center">
                   <tr><td><br></td></tr>
                   <tr><td><br></td></tr>
                   <tr>
                        <td style="color:blue">
                            New User ? Register Here
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
                                    <tr><td><input type="text" name="txt_name" value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td style="font-size: 14px">What country do you currently live in ?:<span style="color:red">*</span></td>
                                    </tr>
                                    <tr><td >
                                            <input type="text" name="txt_country" size="60/>"
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
                                    <tr><td><input type="text" name="txt_phone" id="phone"  value="" size="60" /></td></tr>
                                    <tr><td><br></td></tr>
                                    
                                    <tr ><td align="left"><input type="submit" value="Create new account" name="btn_create" /></td></tr>
                                    <tr><td><font style="font-size:10px">Fields marked with <span style="color:red">*</span> are mandatory to be filled</font></td></tr>
                                    <tr><td style="color:red"> <?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']; ?></td></tr>
                </table>
            </div></td>
        
		<!-- end #content -->
               
               <td> <div style="width:400;height:780;border:1px solid black;border-radius: 10">
                    <table border="0" width="360" align="center">
                        <tr><td><br></td></tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td style="color:blue">Already Registered! Login here</td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr><td>Username</td></tr>
					<tr><td><input type="text" name="text_user" size="40"/></td></tr>
                                        <tr><td><br></td></tr>
                                       <tr><td> Password</td></tr>
                                       <tr><td> <input type="password" name="text_pass" size="40"/></td></tr>
                                       <tr><td><br></td></tr>
                                      <tr><td>  <input type="submit" name="btn_login" value="Login" />  </td></tr>
                                     <tr><td style="color:red"> <?php if(isset($_REQUEST['total1'])) echo $_REQUEST['total1']; ?></td></tr>
                       
                    </table>
                </div></td></tr></table></div>
                
		<!-- end #sidebar -->
		
        
	<!-- end #page -->
	<div id="footer">
            <p>© Copyright 2015... All rights reserved.<br>TechSync Consultancy Pvt. Ltd.</br></p>
	</div>
	<!-- end #footer -->
</div>
    </form></body>     
</html>
