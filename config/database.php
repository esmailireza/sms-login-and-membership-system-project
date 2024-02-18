<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=users-info", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";

try {

  if (isset($_POST['signup'])) {
    //parametrs
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    //sql
    $query = "INSERT INTO users SET username=?, password=?, mobile=?, email=?";

    //stmt
    $stmt = $conn->prepare($query);

    //bind
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->bindValue(3, $mobile);
    $stmt->bindValue(4, $email);

    //exec
    $stmt->execute();

    //echo "created Account!";
    header("location:index.php");

  } else {
    //echo "unsuccessfull! :(";
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}