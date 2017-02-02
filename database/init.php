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

/*$sql = "CREATE DATABASE DB1;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

$sql = "
CREATE TABLE heroku_898cc148975c8aa.tab1(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "INSERT INTO heroku_898cc148975c8aa.tab1
VALUES (1,'abc','abc','abc','abc');";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();