<?php
$db_host = "clcm3504-cicd-exam-sandeep-db.czptxhzjxjrt.us-east-1.rds.amazonaws.com";
$db_username = "admin";
$db_password = "Admin12321";
$db_name = "bow-hotels-db";

try {
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
} catch (Exception $e) {
    throw new Exception("Database Connect Error!");
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
