<?php

// Database configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'my-sms';

// Create a connection to the database
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// API endpoint to fetch data from a table
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT * FROM accounts";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Convert the data array to JSON and output it
        echo json_encode($data);
    } else {
        echo 'No data found.';
    }
}

// Close the database connection
$mysqli->close();

?>