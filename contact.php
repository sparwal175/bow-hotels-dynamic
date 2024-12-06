<?php
$conn = mysqli_connect("localhost", "root", "", "bow-hotels-db");

// Check connection
if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];        
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO contactus(full_name, email, phone, message) VALUES ('$full_name', '$email', '$phone', '$message')";

if(mysqli_query($conn, $sql)){
	echo "Thank you for contacting us. Your details are capture. We will shortly connecting with you.";
} else{
	echo "There is some error. Please try again later.";
}

// Close connection
mysqli_close($conn);
?>