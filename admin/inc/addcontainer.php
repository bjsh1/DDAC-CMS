<?php

include 'config.php';

$name = $_POST['name'];
$status = $_POST['status'];

$sql = "INSERT INTO container (name, status) VALUES ('$name', '$status');";
mysqli_query($link, $sql);

header("Location: ../container.php?action=added");




// Close connection
mysqli_close($link);
?>