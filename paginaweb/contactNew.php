<?php
include 'cone.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$m_subject = $_POST['subject'];
$message = $_POST['message'];
global $conn;

$sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$name', '$email', '$m_subject', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Clase hola";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>