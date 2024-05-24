<?php
$hostname = 'localhost';
$username = 'id21353074_nandu';
$password = 'Nandu@123';
$database = 'id21353074_appdb';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT  firstname, lastname FROM MyGuests";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($users);
} catch (PDOException $e) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Database Error: " . $e->getMessage();
}
?>
