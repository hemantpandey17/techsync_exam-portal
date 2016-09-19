<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Examination</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        var settimmer = 0;
        $(function(){
                window.setInterval(function() {
                    var timeCounter = $("b[id=show-time]").html();
                    var updateTime = eval(timeCounter)- eval(1);
                    $("b[id=show-time]").html(updateTime);

                    if(updateTime == 0){
                        window.location = ("submit.php?$timer=1");
                    }
                }, 1000);

        });
    </script>
	
	<style type="text/css">
    body{ font-family: verdana; font-size:12px; }
    a{text-decoration: none;color:blue;font-weight: bold;}
    a:hover{color: gray;font-weight: bold;}
    div#my-timer{width: 400px;background: lightblue; margin:  0 auto;text-align: center;padding:5px 0px 5px 0px;}
</style>
</head>
<body>
    <form action="it-comp.php" method="post"> 
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
                    <tr><td align="center"><font  style="color:yellow;font-size:18">Welcome, <?php session_start(); echo $_SESSION['user1']; ?></font></td>
                   <td align="right">  <input type="submit" name="btn_logout" value="Log Out"/></td></tr>
           </table></div>
	<!-- end #menu -->
	<div id="page" style="height:800">
            <div  style="height:750;width:750; border:1px solid black;margin-left:80">
	
           <?php 
 
   $time=$_GET['timer'];
   echo $time;
     if($time>1)   
     {   
     $j=$i+1;
    echo '<table width="700" height="550"  border="0" align="center">';
    echo "<tr><td colspan='2'>Ques: " .$j." of 10</td></tr>";
    echo "<tr valign='top' ><td width='70'>";
    @print($data[$i][ques_id]);
        echo":</td>";
    echo "<td>";
      @print ($data[$i][question]);
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="A" /></td>';
    echo "<td>";
      @print ($data[$i][option1]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="B" /></td>';
    echo "<td>";
      @print ($data[$i][option2]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="C" /></td>';
    echo "<td>";
      @print ($data[$i][option3]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="D" /></td>';
    echo "<td>";
      @print ($data[$i][option4]);
      echo "</td></tr>";
    echo '</table>';
    echo "<p>";
    echo "<table width='720'><tr><td align='center'><input type='submit' name='btn_submit' value='Submit'/></td></tr></table>";
}
 elseif($time==1){
      $markfinal=$_SESSION['marks'];
    echo "<table border='1' width='400' height='330' align='center'>";
    echo "<tr><td align='center' >";
    echo "<font style='color:Green;font-size:' ><h1>Your Score Is</font></h1><p> ";
    echo "<span style='color:black;font-size:20'>";
    echo $markfinal;
    echo "</span><p><br>";
    echo "<h3 style='color:red'>Click here to go to Home Page</h3>";
    echo "<br><a href='aftrlogin.php'>";echo "Continue";echo"</a>";
    echo "</td></tr></table>";
    $markfinal=$_SESSION['marks'];
    $user=$_SESSION['user1'];
    $data6=array();
    $qry5="select * from answer_record where username='$user' and examname='IT_COMP'";
    $qry6="select answer from questions_it ";
    $res6=mysql_query($qry6);
    $res5=  mysql_query($qry5);
    $numrow5=  mysql_affected_rows();
    if($numrow5 > 0)
    {
    echo "<table border='1' align='center'>";
    echo "<tr><td><table>";
    echo "<tr><th>your answer</th></tr>";
    while($row5=  mysql_fetch_array($res5))
    {
        echo "<tr align='center'><td>".$row5[2]."</td></tr>";
        echo "<tr align='center'><td>".$row5[3]."</td></tr>";
        echo "<tr align='center'><td>".$row5[4]."</td></tr>";
        echo "<tr align='center'><td>".$row5[5]."</td></tr>";
        echo "<tr align='center'><td>".$row5[6]."</td></tr>";
        echo "<tr align='center'><td>".$row5[7]."</td></tr>";
        echo "<tr align='center'><td>".$row5[8]."</td></tr>";
        echo "<tr align='center'><td>".$row5[9]."</td></tr>";
        echo "<tr align='center'><td>".$row5[10]."</td></tr>";
        echo "<tr align='center'><td>".$row5[11]."</td></tr>";
    }echo "</table></td><td><table><tr><th>Correct answer</th></tr>";
    while($row6= mysql_fetch_row($res6))
    {
        $data6[]=$row6;
        
        
    }
   for($k=0;$k<10;$k++)
    {
        echo "<tr align='center'><td>".$data6[$k][0]."</td></tr>";
    }
    echo "</table></td></tr></table>";
    }
   
   
    
}

?>
    

            
            
            </div>
	</div>
	<!-- end #page -->
	<div id="footer">
            <p>© Copyright 2015... All rights reserved.<br>TechSync Consultancy Pvt. Ltd.</br></p>	</div>
	<!-- end #footer -->
</div>
    </form></body>      
</html>
