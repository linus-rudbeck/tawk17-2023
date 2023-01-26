<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "ju_cars");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>

<body>
    <h1>Cars</h1>


    <ul>

        <?php
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='edit-car.php?id={$row["id"]}'>{$row["make"]} {$row["model"]}</a></li>";
        }
        ?>

    </ul>
</body>

</html>