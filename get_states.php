<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'craft2';

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve the list of states
$sql = "SELECT name FROM states";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if ($result) {
    $states = array();

    // Loop through the query results and add each state to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $states[] = $row['name'];
    }

    // Return the states as a JSON array
    header('Content-Type: application/json');
    echo json_encode($states);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
