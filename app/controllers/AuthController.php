<?php
require_once __DIR__ . "/../../config/database.php";

$db = new database();
$conn = $db->connect();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = :username AND password = :password";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(":username", $username);
    $stmt -> bindParam(":password", $password);

    $stmt->execute();

    if($stmt->rowCount() > 0){

        $_SESSION['user'] = $username;

        header("Location: ?page=dashboard");
        exit;
    } else {
        
        echo "Invalid Login";
    }
}
require_once __DIR__ . "/../views/login.php";
?>