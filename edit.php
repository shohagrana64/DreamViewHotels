<?php
 
include 'dbconnect.php';
	$conn = OpenCon();
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "SELECT * from rooms where Serial_Number='".$Serial_Number."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">
<p><a href="Home.php">Home</a> | <a href="insert.php">Insert New Record</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['Price']) )
{
$Serial_Number = $_REQUEST['Serial_Number'];
$ID =$_REQUEST['ID'];
$Location =$_REQUEST['Location'];
$Type = $_REQUEST['Type'];
$Price = $_REQUEST['Price'];

$update="update rooms set id='".$ID."', type='".$Type."',  price='".$Price."' where Serial_Number='".$Serial_Number."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='vcars.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<p><input type="text" name="Serial_Number" placeholder="Enter Serial_Number" required value="<?php echo $row['Serial_Number'];?>" /></p>
<p><input type="text" name="ID" placeholder="Enter ID" required value="<?php echo $row['id'];?>"/></p>
<p><input type="text" name="Location" placeholder="Enter Location" required value="<?php echo $row['location'];?>"/></p>
<p><input type="text" name="Type" placeholder="Enter Type" required value="<?php echo $row['type'];?>"/></p>
<p><input type="text" name="Price" placeholder="Enter Price" required value="<?php echo $row['price'];?>"/></p>


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
