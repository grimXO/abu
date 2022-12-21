<?php
include "sessionstart.php";
include "connect.php";
include "nav.html";
?>

<?php
$query = "SELECT * FROM airports";
$resultset = $conn->query($query);
$airports = $resultset->fetchAll();
$conn = NULL;

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Add new city</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <h1>Add a new flight</h1>
    <form action="save.php" method="post">
        <div>
            <label for="Froms">Departing From:</label>
            <select id="Froms" name="Froms">
                <?php
                foreach ($airports as $airport) {
                    echo "<option value='{$airport["id"]}'>{$airport["name"]}</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="Tos">Arriving At:</label>
            <select id="Tos" name="Tos">
                <?php
                foreach ($airports as $airport) {
                    echo "<option value='{$airport["id"]}'>{$airport["name"]}</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="Departure_Date">Departure Date:</label>
            <input type="date" id="Departure_Date" name="Departure_Date" min="2020-01-01" max="2030-1-1" />
        </div>
        <div>
            <label for="departure_time">Departure Time :</label>
            <input type="time" name="departure_time" id="departure_time" class="departure_time">
        </div>
        <div>
            <label for="Arival_Date">Arival Date:</label>
            <input type="date" id="Arival_Date" name="Arival_Date" min="2020-01-01" max="2030-1-1" />
        </div>
        <div>
            <label for="Arival_time">Departure Time :</label>
            <input type="time" name="Arival_time" id="Arival_time" class="departure_time">
        </div>
        <input type="submit" name="submitBtn" value="Add Flight">
    </form>

</body>

</html>