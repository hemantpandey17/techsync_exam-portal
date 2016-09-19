<?php session_start(); 

if($_SESSION['user1'] == '')
{
 $error="Please login first!";
      header("location:index.php?total=$error");
}

?><html xmlns="http://www.w3.org/1999/xhtml">
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
                        window.location = ("iq-submit.php?timer=1");
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
    <form action="iq.php" method="post"> 
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
                    <tr><td align="center"><font  style="color:yellow;font-size:18">Welcome, </font></td>
                   <td align="right">  <input type="submit" name="btn_logout" value="Log Out"/></td></tr>
           </table></div>
	<!-- end #menu -->
	<div id="page" style="height:800">
            <div  style="height:750;width:750; border:1px solid black;margin-left:80">
			<div id="my-timer">
        You have  <b id="show-time"><?php $timer='60'; echo $timer; ?></b> seconds to answer this question      
</div>
           <?php 
           if(isset($_POST['btn_iq']))
{
    //session_start();
    //include "gate.php";
    $_SESSION['counter']=0;
    $_SESSION['marks']=0;
    
    $user=$_SESSION['user1'];
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    
    mysql_select_db(DATABASE);
    
   
    $qry2="select * from answer_record where username='$user' and examname='IQ'";
    $res2=mysql_query($qry2);
    $numrow2=  mysql_num_rows($res2);
    $qry1="insert into answer_record (username,examname) values('$user','IQ')";
    $res1=  mysql_query($qry1);
    $qry="select * from questions_iq";
    $res=mysql_query($qry);
    $numrow=  mysql_num_rows($res);
    
   
    
    //$numrow=  mysql_affected_rows();
    $data=array();
    while($row= mysql_fetch_assoc($res))
    {
        $data[]=$row;
    }
    echo '<table width="700" height="550"  border="0" align="center">';
   echo "<tr><td>Ques:1 of 10</td></tr>";
    echo "<tr  valign='top'><td>";
    @print($data[0][ques_id]);
    echo":";
    
      @print ($data[0][question]);
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="A" />';
    
      @print ($data[0][option1]);
      echo "</td></tr>";
      
      echo '<tr><td><input type="radio" name="radio_answer" value="B" />';
      @print ($data[0][option2]);
      echo "</td></tr>";
      
      echo '<tr><td><input type="radio" name="radio_answer" value="C" />';
    
      @print ($data[0][option3]);
     
      echo "</td></tr>";
      
      echo '<tr><td><input type="radio" name="radio_answer" value="D" />';
   
      @print ($data[0][option4]);
      echo "</td></tr>";
    echo '</table>';
    echo "<p>";
    echo "<table width='720'><tr><td align='center'><input type='submit' name='btn_submit' value='Submit'/></td></tr></table>";

}
          
 if(isset($_POST['btn_submit']))
{
    //session_start();
     
     if(isset($_POST['radio_answer']))
     {
    $ans=$_REQUEST['radio_answer'];
     }
     else
     {
         $ans=NULL;
     }
     //$mark=$_SESSION['marks'];
    $_SESSION['counter']=$_SESSION['counter']+1;
    $i=$_SESSION['counter'];
    $user=$_SESSION['user1'];
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
    $qry="select * from questions_iq";
   $var="answer".$i;
   $qry1="update answer_record set $var='$ans' where username='$user' and examname='IQ' ";
   $res1=mysql_query($qry1);
    $res=mysql_query($qry);
    $numrow=  mysql_num_rows($res);
    $data=array();
    while($row= mysql_fetch_assoc($res))
    {
        $data[]=$row;
    }
    @$correct=($data[$i-1][answer]);
    if($ans===$correct && $i<=10)
    {
        
        $_SESSION['marks']=$_SESSION['marks']+5;
        $mark=$_SESSION['marks'];
        $qry3="update  answer_record set total='$mark' where username='$user' and examname='IQ'";
    $res=mysql_query($qry3);
     }
   
     if($i<$numrow)   
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
 else {
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
    $qry5="select * from answer_record where username='$user' and examname='IQ'";
    $qry6="select answer from questions_iq ";
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
}
if(isset($_POST['btn_logout']))
{
    session_destroy();
    header("location:index.php");
}
?>
    

            
            
            </div>
	</div>
	<!-- end #page -->
	<div id="footer"> 
  <p>© Copyright 2015... All rights reserved.<br>TechSync Consultancy Pvt. Ltd.</br></p>
	</div>
	<!-- end #footer -->
</div>
    </form></body>      
</html>
