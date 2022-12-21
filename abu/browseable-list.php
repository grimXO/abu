<?php
include "sessionstart.php";
include "connect.php";
include "nav.html";
?>

<?php
$query = "SELECT * FROM flights";
$resultset = $conn->query($query);
$flights = $resultset->fetchAll();
$conn = NULL;

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>List the flights</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <ul>
        <?php
        foreach ($flights as $flight) {
            echo "<li>";
            echo "<a href='details.php?id={$flight["id"]}'>{$flight["departure_date"]}</a>";
            echo "</li>";
        }

        ?>
    </ul>
    <form action="search.php" method="post">
        <input type="text" id="Flight" name="Flight" placeholder="ENTER FLIGHT DATE" required>
        <input type="submit" name="submitBtn" value="search">
    </form>
</body>

</html>