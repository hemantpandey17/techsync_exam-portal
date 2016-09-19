<?php

$sql = new mysqli('localhost', 'root', '', 'tech');
$user=$_SESSION['user1'];
$qry="select * from personal_detail where username='$user'";
$res2=mysqli_query($sql,$qry);
$numrow=  mysqli_num_rows($res2);
if($numrow>0)
{
   echo '<table width="600" height="0" border="0" align="center" cellpadding="10">';
       while ($row = $res2->fetch_array(MYSQLI_NUM))
       {
                       echo ' <tr><td>Name:*</td>'; ;
                       echo "<td><textarea cols='40' name='name' style='resize:none;height:25;font-family:Arial'>$row[2]</textarea></td></tr>";
                       echo '<tr><td>Email Address:*</td>';
                        echo "<td><textarea name='email' style='resize:none;height:25;font-family:Arial' cols='40'>$row[3]</textarea></td></tr>";
                        echo '<tr><td>City:</td>';
                         echo "<td><textarea name='city' style='resize:none;height:25;font-family:Arial' cols='40' >$row[4]</textarea></td></tr>";
                         echo '<tr><td>State:</td>';
                         echo "<td><textarea name='state' style='resize:none;height:25;font-family:Arial' cols='40'>$row[5]</textarea></td></tr>";    
                           echo '<tr><td>Country:*</td>';
                         echo "<td><textarea name='country' style='resize:none;height:25;font-family:Arial' cols='40'>$row[6]</textarea></td></tr>";
                         echo '<tr><td>Contact No:*</td>';
                         echo "<td><textarea name='phone' style='resize:none;height:25;font-family:Arial' cols='40'>$row[7]</textarea></td></tr>";
                        echo '<tr><td>Father Name:</td>';
                         echo "<td><textarea name='fname' style='resize:none;height:25;font-family:Arial' cols='40'>$row[8]</textarea></td></tr>";
                          echo '<tr><td>Degree:</td>';
                         echo "<td><textarea name='degree' style='resize:none;height:25;font-family:Arial' cols='40'>$row[9]</textarea></td></tr>";
                          echo '<tr><td>College/University:</td>';
                         echo "<td><textarea name='college' style='resize:none;height:25;font-family:Arial' cols='40'>$row[10]</textarea></td></tr>";
       }
       echo "</table>";
}
       
?>
