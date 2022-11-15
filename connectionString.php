<?php

$conn = new mysqli("localhost", "root", "", "zadatakphp");

// Check connection
if ($conn->connect_error) {

    die("Greska sa konekcijom: " . $conn->connect_error);
}

?>
