<?php
include 'config.php';
$userid='';

$project_sql="SELECT * FROM projects WHERE user_id=$userid";
$result = mysqli_query($connection, $project_sql);
if ($result) {
    // Fetch the data from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the user_id value for each row
        $userId = $row['user_id'];
        
        // Use the value as needed (e.g., echo it)
        echo $userId;
    }}

?>