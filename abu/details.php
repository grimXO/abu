<?php
include "sessionstart.php";
include "connect.php";
include "nav.html";
?>

<?php
$flightId = $_GET['id'];

$stmt = $conn->prepare(
    "SELECT home.name AS home, away.location AS away, home.location AS loc, away.name AS awayport, flights.departure_date, flights.departure_time, flights.arrival_date, flights.arrival_time
    FROM flights
    JOIN airports AS home ON flights.origin_id = home.id
    JOIN airports AS away ON flights.destination_id = away.id 
    WHERE flights.id = :id"
);
$stmt->bindValue(':id', $flightId);
$stmt->execute();
$flight = $stmt->fetch(); // we only want one film so retrieve a single row
$conn = NULL;
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Display the details for a flight</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    if ($flight) {
        echo "<p>Airport Name:{$flight['home']}</p>";
        echo "<p>Airport Location:{$flight['loc']}</p>";
        echo "<p>Destination Name:{$flight['awayport']}</p>";
        echo "<p>Destination Location:{$flight['away']}</p>";
        echo "<p>Departure Date:{$flight['departure_date']}</p>";
        echo "<p>Departure Time:{$flight['departure_time']}</p>";
        echo "<p>Arrival Date:{$flight['arrival_date']}</p>";
        echo "<p>Arrival Time:{$flight['arrival_time']}</p>";

    } else {
        echo "<p>Can't find the flight</p>";
    }
    ?>
</body>