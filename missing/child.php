<!DOCTYPE html>
<html>
<head>
<title>missing child detection</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
    	padding-top: 60px; 
    background-size:cover;
    font-family:verdana;
    font-size:20px;
    margin:0;
    line-height:24px;
    }
h1{
	text-align: center;
    font-family: times new roman;
	float: top;
    position:relative;
    bottom:80px;
}
h2{
    font-family:georgia;
    font-size: 20px;
    color: #ffb3b3;
}
.pk{
text-align:center;
width:100%;
height: 70px;
background: #008080;
opacity:0.7;
margin-top:-90px;
}
.pk ul{
margin:0;
padding:0;
list-style:none;
position:relative;
}
.pk ul li a{
	text-transform: uppercase;
	font-family: cooper black;
display:block;
padding:25px;
color:white;
text-decoration:none;
width:150px;
}
.pk ul:after {
content:" ";clear:both;
display:block;
}
.pk ul li {
float:left;
list-style:none;
}
.pk ul li:hover>ul{
display:block;
}
.pk ul li:hover {
    height: 70px;
background:black;
transition:0.9s;
}
.pk ul ul {
background:block;
padding:0;
margin:0;
position:absolute;
top:100%;
}
.pk ul ul li {
float:none;
position:relative;
}
.pk ul ul li a {
padding:25px;
color:white;
width:300px;
text-align:left;
}
.pk ul ul li a:hover{
background:lightblue;
color:black;
transition:0.9s;
}

.topnav input[type=text] {
    position: relative;
    padding: 6px;
    border-color: blue ;
    width: 400px;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;

}
.topnav button {
    position: relative;
    right:20px;
  padding: 9px 20px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.result{
    position: relative;
    right:300px;
    align-content: center;
    left:0px;
}
img{
    position: relative;
    bottom: 60px;
}
</style>
</head>
<body>
       <center><img src="images.png" height="100px"></center>
	<h1>Missing Child Detection</h1>
<div class="pk">
<ul>
<li><a href="">home</a></li>
<li><a href="user.html">user login</a></li>
<li><a href="signup1.html">signup</a></li>
<li><a href="plogin.html">police</a></li>
<li><a href="details.html">Lost Child Form</a></li>
<li><a href="about.html">about</a></li>
</ul></div>
            
                 <font size="4"><h2><marquee direction="left">Lets reintegrate every "Missing Child" of the country with their families</marquee></h2><br><br>
                <div class="topnav">
				<form method="POST" action="">
                    <center>
                <input type="text" placeholder="Search missing child" name="search">
                <button type="submit"><i class="fa fa-search"></i></button></center>
				</form>
               
    <?php
   if(isset($_POST['search'])){
    $name=$_POST['search'];
        require_once('dbconnection.php');
        $result = $conn->prepare("SELECT * FROM details where name='$name'");
        ?>
        <br>
        <div class="result">
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
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
    ?>

        <tr>
             <td><label><?php echo "<img src='".$row['image']."' height='100px' width='100px'>"; ?></label></td>
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
           
            
        </tr>
        <?php 
    }} ?>
    </tbody>
</table>
            </div>

</p></font>
</body>
</html>