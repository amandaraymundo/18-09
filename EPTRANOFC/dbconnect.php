<?php
$conn = mysqli_connect("localhost:3306", "root", "root","eptranofc");

if (!$conn) {
    die("Connection failed." . mysqli_connect_error());
} else {
    echo "Ok";
}

?>