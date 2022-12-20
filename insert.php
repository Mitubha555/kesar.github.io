<?php
// echo "php complet";
// echo "<br>";
echo "<br>";
    echo "connected";
    echo "<br>";
if (isset($_POST['name']))
{
    // echo "<br>";
    // echo "if part";
    $server="localhost";
    $username="root";
    $password="";
    $database_name="web1";     // $database
    $connection=mysqli_connect($server,$username,$password,$database_name);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "<br>";
    echo "connected";
    echo "<br>";
    $NAME= $_POST['name'];
    $SURNAME=$_POST['surname'];
    $phone_no=$_POST['phone_no'];
    $date=$_POST['date'];
    echo $val="INSERT INTO registation (name,surname,phone_no,date) VAlUES ('$NAME','$SURNAME','$phone_no','$date')";
    
    $query = mysqli_query($connection,$val);
    if($query)
    {
        echo "data inserted";
    }
    
}
?>