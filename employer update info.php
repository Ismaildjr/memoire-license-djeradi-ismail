<?php
// Assuming you have already established a database connection
require 'employerlogin1.php';
if($_SESSION['logged_in1']==false){
    header('Location: AAB1.php');

}
if ($_SERVER["REQUEST_METHOD"] === "POST11") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
   
    if(!empty($name)){
        $query = "UPDATE users SET full_name = '$name' WHERE id = {$_SESSION['userid1']}";// Assuming you have the $userID
        $result = mysqli_query($conn, $query);
}
if(!empty($email)){
    $query = "UPDATE users SET email = '$email' WHERE id = {$_SESSION['userid1']}";// Assuming you have the $userID
    $result = mysqli_query($conn, $query);
}
elseif(!empty($email)&&!empty($name)){
    $query = "UPDATE users SET email = '$email' WHERE id = {$_SESSION['userid1']}";// Assuming you have the $userID
    $result = mysqli_query($conn, $query);
    $query11 = "UPDATE users SET full_name = '$name' WHERE id = {$_SESSION['userid1']}";// Assuming you have the $userID
        $result = mysqli_query($conn, $query11);


}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $passwordupdate = $_POST["password"];
    $passwordupdate1 = $_POST["password1"];
    // Retrieve the form data
    
    if(empty($passwordupdate)||empty($passwordupdate1)){
        $result = mysqli_query($conn, $query);
}
elseif($passwordupdate!=$passwordupdate1){
    echo'password doenst match';
}
else{
    $passwordupdate = password_hash($pass, PASSWORD_DEFAULT);


    $query = "UPDATE users SET password = '$passwordupdate' WHERE id = {$_SESSION['userid1']}";// Assuming you have the $userID


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
