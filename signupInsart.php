<?php
$name=  $_POST['name'];
$address=  $_POST['address'];
$age=  $_POST['age'];
$email=  $_POST['email'];
$password=  $_POST['password'];

// 
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "dreamview hotels";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
		$Select = "Select email From register Where email = ? Limit 1";
		$Insert = "Insert into customer (name, address, age, email, password) values(?, ?, ?, ?, ?)";
		//$stmt = $conn->prepare($Select);
		//$stmt->bind_param("s", $email);
		//$stmt->execute();
		//$stmt->bind_result($email);
		//$stmt->store_result();
		//$rnum = $stmt->num_rows;
		//if ($rnum==0) {
			//$stmt->close();
			$stmt = $conn->prepare($Insert);
			$stmt->bind_param("ssiss", $name, $address, $age, $email, $password);
			$stmt->execute();
			//echo "New record inserted sucessfully";
		//} 
		//else {
		//	echo "Someone already register using this email";
		//}
		header ("location: wellcome.php");
		$stmt->close();
		$conn->close();
		
	}


?>	

