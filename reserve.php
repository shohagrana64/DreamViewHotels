<?php
include 'dbconnect.php';
	$conn = OpenCon();

$status = "";
if(isset($_POST['Email']) )
{
$Email = $_REQUEST['Email'];
$Creditcard =$_REQUEST['Creditcard'];
$RoomSL =$_REQUEST['RoomSL'];
$date =$_REQUEST['date'];
$price=0;
if($RoomSL<=108){
	$price=5000;
}
else if($RoomSL<=208){
	$price=3000;
}
else{
	$price=1000;
}
$update="update customer set creditcard='".$Creditcard."', reservedroomsl='".$RoomSL."',date='".$date."',price='".$price."' where email='".$Email."'";

mysqli_query($conn, $update) or die(mysqli_error());
$status = "Reserved Successfully. </br></br><a href='allcars.php'>View other rooms</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
CloseCon($conn);

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Reserve Room</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">
<p><a href="Home.php">Home</a> | <a href="customerinterface.php">Go back</a> </p>
<h1>Reserve Room</h1>

<div>
<form name="form" method="post" action=""> 
<p><input type="text" name="Email" placeholder="Enter Email" required /></p>
<p><input type="text" name="Creditcard" placeholder="Enter Credit Card sl" required /></p>
<p><input type="text" name="RoomSL" placeholder="Enter The SL of the room you like" required /></p>
<p><input type="date" name="date" placeholder="Enter The date" required /></p>


<p><input name="submit" type="submit" value="Reserve" /></p>
</form>


</div>
</div>
</body>
</html>
