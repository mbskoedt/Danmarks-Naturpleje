<?php
$name = $_POST['name'];
$firma = $_POST['firma'];
$emne = $_POST['emne'];
$email = $_POST['email'];
$tekst = $_POST['tekst'];

// Database conncetion

$conn = new mysqli('localhost', 'root', 'test');
if($conn->connect_error){
    die('Connection Failed : '$conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into registration(navn, firma, emne, email, tekst)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $navn, $firma, $emne, $email, $tekst);
    $stmt->execute();
    echo "Registration Succesfully...";
    $stmt->close()
    $conn->close();
  }

?>
