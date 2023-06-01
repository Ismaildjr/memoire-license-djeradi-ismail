<?php
// Assuming you have already established a database connection
require 'userlogin1.php';
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] === "POST1") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
   
    if(!empty($name)){
        $query = "UPDATE users2 SET full_name = '$name' WHERE id = {$_SESSION['userid']}";// Assuming you have the $userID
        $result = mysqli_query($conn, $query);
}
if(!empty($email)){
    $query = "UPDATE users2 SET email = '$email' WHERE id = {$_SESSION['userid']}";// Assuming you have the $userID
    $result = mysqli_query($conn, $query);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $passwordupdate = $_POST["password"];
    $passwordupdate1 = $_POST["password1"];
    // Retrieve the form data
    
    if(empty($passwordupdate)||empty($passwordupdate1)){
        $result = mysqli_query($conn, $query);
}
elseif($passwordupdate!=$passwordupdate1){
    echo'Mot de passe sont pas les memes';
}
else{
    $passwordupdate = password_hash($pass, PASSWORD_DEFAULT);


    $query = "UPDATE users2 SET password = '$passwordupdate' WHERE id = {$_SESSION['userid']}";// Assuming you have the $userID


}
}
   
// Sanitize and validate the data as needed

    // Update the user information in the database

    // Execute the update query
    $result = mysqli_query($conn, $query);

    // Check if the update was successful
    if ($result) {
        echo "User information updated successfully.";
        
    } else {
        echo "Error updating user information: " . mysqli_error($conn);
    }
}

?>
