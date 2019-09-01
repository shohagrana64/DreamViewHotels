<?php 
$email= $_POST['email'];
$pass= $_POST['password'];
$type= $_POST['type']; 


 
if($type=='a'){
    $host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "dreamview hotels";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
    
		
		$s="select * from admin where email='".$email."' and password='".$pass."' ";
		$result= mysqli_query ($conn, $s);
		
		if(mysqli_fetch_assoc($result)> 0){
			header ("location: vcars.php");
			
		}
		else{
			echo "Sorry User Not Registered :D";
			
		}
	}
        
}
else if($type=='c'){
    $host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "dreamview hotels";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
    
		
		$s="select * from customer where email='".$email."' and password='".$pass."' ";
		$result= mysqli_query ($conn, $s);
		
		if(mysqli_fetch_assoc($result)> 0){
			header ("location: customerInterface.php");
			
		}
		else{
			echo "Sorry User Not Registered :D";
			
		}
	}
        
}

?>
