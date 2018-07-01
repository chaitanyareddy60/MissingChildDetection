
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
#sectiontohide {
	background-color: transparent;
	display: none;
}
th {font-size:18px;border:0;}
td {color:white;
    		font-size:14px;}
    		
</style>
<script type="text/javascript">
       function show(id){
    	var elmt = document.getElementById(id);
          elmt.style.display = 'block';
    }
</script>
<body >

<button onclick="show('sectiontohide'); name="search">marks</button> 
<div id="sectiontohide">
<?php
include 'dbconnection.php';
if(isset($_POST['search'])
$b=$_SESSION["RegdNo"];
try{
$sql = "SELECT name from details where name='$";
$result= $conn->query($sql);

if($result->rowCount()>0)
{
echo <th>Name</th>
// output data of each row
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr><td>".$row["name"]."</td>

}

}
}
catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}
$conn=null;
?>
</div>
</body>
</html>