<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 2/1/17
 * Time: 10:03 PM
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

/*$sql = "CREATE DATABASE DB1;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

$sql = "SELECT * FROM heroku_898cc148975c8aa.tab1;";
/*if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

$results = $conn -> query($sql);
var_dump($results);
echo $results;

$conn->close();