<?php
$servername = "localhost";
$username = "id22192507_phurbasherpa";
$password = "Tashidelekrtu@96";
$dbname = "id22192507_swen_ebusiness";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
