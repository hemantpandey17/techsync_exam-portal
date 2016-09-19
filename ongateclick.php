
<?php

if(isset($_POST['btn_logout']))
{
    session_start();
    session_destroy();
    header("location:index.php");
}

if(isset($_POST['btn_gate']))
{
    session_start();
    include "gate.php";
    $_SESSION['counter']=0;
    $user=$_SESSION['user1'];
    include("db.php");
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
    $qry="select * from questions_gate";
    $res=mysql_query($qry);
    $numrow=  mysql_affected_rows();
    $data=array();
    while($row= mysql_fetch_assoc($res))
    {
        $data[]=$row;
    }
    echo '<table width="700"  border="1">';
    echo "<tr><td>ques:</td>";
    echo "<td>";
      @print ($data[0][question]);
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="A" /></td>';
    echo "<td>";
      @print ($data[0][option1]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="B" /></td>';
    echo "<td>";
      @print ($data[0][option2]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="C" /></td>';
    echo "<td>";
      @print ($data[0][option3]);
      echo "</td></tr>";
      echo "</td></tr>";
      echo '<tr><td><input type="radio" name="radio_answer" value="D" /></td>';
    echo "<td>";
      @print ($data[0][option4]);
      echo "</td></tr>";
    echo '</table>';
}
?>

