<?php


if (isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database_name="web1";     // $database
    $connection=mysqli_connect($server,$username,$password,$database_name);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
   
    $NAME= $_POST['name'];
    
     $val="select *from registation where name='$NAME'";
    
    $query = mysqli_query($connection,$val);
    if($query)
    {
        $row = mysqli_fetch_array($query);
        if($row>0)
        {
            

            echo "<table>";
            
            echo "<tr>";
            echo "<td>";
            echo "NAME : "; 
            echo "</td>";
            echo "<td>";
            echo "$row[name] ";
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "SURNAME : "; 
            echo "</td>";
            echo "<td>";
            echo "$row[surname] ";
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "MOBILENO : "; 
            echo "</td>";
            echo "<td>";
            echo "$row[phone_no]";
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "date of birth : "; 
            echo "</td>";
            echo "<td>";
            echo "$row[date]";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }

    }
    
}
?>