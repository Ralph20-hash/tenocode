<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['phone'];
$message = $_POST['message'];
$sql = "INSERT INTO contact_db (firstname, lastname, email, number, message)
        VALUES ('$firstname', '$lastname', '$email', '$number', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
