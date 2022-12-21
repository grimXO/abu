<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=abu', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Oh no, there was a problem" . $exception->getMessage();
}


$Froms = $_POST['Froms'];
$Tos = $_POST['Tos'];
$Departure_Date = $_POST['Departure_Date'];
$departure_time = $_POST['departure_time'];
$Arival_Date = $_POST['Arival_Date'];
$Arival_time = $_POST['Arival_time'];

if (empty($Froms) || empty($Tos) || empty($Departure_Date) || empty($departure_time) || empty($Arival_Date) || empty($Arival_time)) {
    die("Error: All fields are required");
}

$query = "INSERT INTO flights (origin_id, destination_id, departure_date, departure_time, arrival_date, arrival_time) VALUES (:Froms, :Tos, :Departure_Date, :departure_time, :Arival_Date, :Arival_time)";
$stmt = $conn->prepare($query);
$stmt->bindValue(':Froms', $Froms);
$stmt->bindValue(':Tos', $Tos);
$stmt->bindValue(':Departure_Date', $Departure_Date);
$stmt->bindValue(':departure_time', $departure_time);
$stmt->bindValue(':Arival_Date', $Arival_Date);
$stmt->bindValue(':Arival_time', $Arival_time);
$stmt->execute();

// Check for errors
$error = $stmt->errorInfo();
if ($error[0] != 0) {
    echo "Error inserting record: " . $error[2];
} else {
    echo "<p>Added the details for {$Departure_Date}.</p>";
}

$conn = NULL;
?>