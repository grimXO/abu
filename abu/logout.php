<?php
include "sessionstart.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page 3</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
    <?php
    session_destroy();
    echo "<p>You've been logged out</p>";
    echo "<p><a href='login.php'>Login again</a></p>";
    ?>
</body>

</html>