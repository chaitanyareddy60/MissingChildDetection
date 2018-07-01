<?php
include 'dbconnection.php';
$username=$_POST["uname"];
$mobno=$_POST["mno"];
$aadharno=$_POST["aadharno"];
$email=$_POST["mail"];
$pwd=$_POST["pwd"];
try
{
    $sql = "INSERT INTO reg(username,mobno,aadharno,email,pwd) VALUES ('$username', '$mobno', '$aadharno','$email','$pwd'	)";
    // use exec() because no results are returned
    $conn->exec($sql);
    include 'details.html';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>