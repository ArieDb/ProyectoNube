<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pagwebdp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$m_subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$name', '$email', '$m_subject', '$message')";

if ($conn->query($sql) === TRUE) {
 echo "Clase";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>