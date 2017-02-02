<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 2/1/17
 * Time: 9:40 PM
 */


$servername = $_ENV["DB_URL"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PW"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


