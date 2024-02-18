<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=users-info", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
if (isset($_POST['signin'])) {
    try {
        //parametrs
        $key = $_POST["key"];
        $password = $_POST["password"];

        //sql
        $query = "SELECT * FROM users WHERE (username = :key OR mobile = :key OR email = :key) AND (password=:password)";

        //stmt
        $stmt = $conn->prepare($query);

        //bind
        $stmt->bindValue(":key", $key);
        $stmt->bindValue(":password", $password);

        //exec
        $stmt->execute();
        $result = $stmt->rowCount();

        if ($result) {
            header('location: ./index.php?loginned=ok');
        } else {
            header('location: ./index.php?notuser=ok');
        }
        //echo "created Account!";
        //header("location:index.php");

    } catch (PDOException $e) {
        echo "uncreated!!!";
        echo "Connection failed: " . $e->getMessage();
    }
}