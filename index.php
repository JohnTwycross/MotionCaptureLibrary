<?php
    // Send variables for the MySQL database class.
    $database = mysql_connect('localhost', 'anonUser', 'QNtNf43ARsE9h9ja') or die('Could not connect: ' . mysql_error());
    mysql_select_db('Mocap') or die('Could not select database');
 
    $query = "SELECT * FROM `OBU_mocap_database`";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
 
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
        echo  " Performer: <b>"  . $row['Perfomer']  .  "</b>, Date: " .$row['Date'] . "<br> Animation file: <a href=" . $row['URL'] . "/" . $row['Path'] . "/Animation/" . $row['Animation'] . " >" . $row['Action'] . "</a> C3D file: <a href=" . $row['URL'] . "/" . $row['Path'] . "/C3D/" . $row['C3D'] . " >" . $row['Action'] . "</a> FBX file: <a href=" . $row['URL'] . "/" . $row['Path'] . "/FBX/" .  $row['FBX'] . ">" . $row['Action'] .  "</a> , Notes: " . $row['Notes'] ."<br><br>";
    }
?>