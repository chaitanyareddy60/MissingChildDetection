<?php>
<table border="1" cellspacing="5" cellpadding="5" width="100%" >
	<thead>
		<tr>
			<th>name</th>
			<th>guardian</th>
			<th>eye</th>
			<th>dob</th>
			<th>caadhar</th>
			<th>hair</th>
			<th>complexion</th>
			<th></th>
			<th>paadhar</th>
			<th>adparent</th>
			<th>mobiledress</th>
			<th>image</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$name=$_POST['search'];
		require_once('dbconnection.php');
		$result = $conn->prepare("SELECT * FROM details where name='$name'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td><label><?php echo $row['name']; ?></label></td>
			<td><label><?php echo $row['guardian']; ?></label></td>
			<td><label><?php echo $row['eye']; ?></label></td>
			<td><label><?php echo $row['dob']; ?></label></td>
			<td><label><?php echo $row['caadhar']; ?></label></td>
			<td><label><?php echo $row['hair']; ?></label></td>
			<td><label><?php echo $row['complexion']; ?></label></td>
			<td><label><?php echo $row['pname']; ?></label></td>
			<td><label><?php echo $row['mnumber']; ?></label></td>
			<td><label><?php echo $row['paadhar']; ?></label></td>
			<td><label><?php echo $row['address']; ?></label></td>
			<td><label><?php echo "<img src='".$row['image']."' height='100px' width='100px'>"; ?></label></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>