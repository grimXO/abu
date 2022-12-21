<?php
include "connect.php";
?>
<?php
$search = $_POST["Flight"];
$query = "SELECT * FROM flights WHERE (departure_date LIKE '%$search%')";
$stmt = $conn->query($query);
$ChosenName = $stmt->fetchAll();
$conn = NULL;
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Prepared statement example</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<div class="search">
		<?php

        //check to see if there are any results
        if ($ChosenName) {
	        foreach ($ChosenName as $ChosenName) {
		        echo "<li>";
		        // for each member create a hyperlink that features the members id in the query string
        		echo "<a href='details.php?id={$ChosenName["id"]}'>{$ChosenName['departure_date']}";
		        echo "</li>";
	        }

        } else {
	        echo "<p>No records found.</p>";
        }

        ?>
	</div>

</body>

</html