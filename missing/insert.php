<?php
include 'dbconnection.php';
$name=$_POST["name"];
$guardian=$_POST["guardian"];
$eye=$_POST["eye"];
$dob=$_POST["dob"];
$caadhar=$_POST["caadhar"];
$hair=$_POST["hair"];
$complexion=$_POST["com"];
$pname=$_POST["pname"];
$mnumber=$_POST["number"];
$paadhar=$_POST["paadhar"];
$address=$_POST["address"];
  $file=$_FILES['image'];
      $file_name = $file['name'];
      $file_size =$file['size'];
      $file_path =$file['tmp_name'];
      $file_type=$file['type'];
      if($file_name!="")
       {
         if(move_uploaded_file($file_path,"images/".$file_name))
         {
try
{
    $sql = "INSERT INTO details VALUES('$name', '$guardian', '$eye','$dob','$caadhar','$hair','$complexion','$pname','$mnumber','images/$file_name','$paadhar','$address')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "submitted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
		 }
	   }

$conn = null;
?>