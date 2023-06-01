<?php
include 'config.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//$_SESSION['logged_in1'] = false;

$errorMsg = ''; // Variable to store the error message

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL statement using a prepared statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM `users` WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Verify the entered password using password_verify
        if (password_verify($password, $hashedPassword)) {
            $status = $row['verify_status'];
            if ($status == "0") {
                $_SESSION['verify_status']="0";
                header('Location: AAB1.php');
                exit;
            } else {
                $_SESSION['username'] = $row['full_name'];
                $_SESSION['pp'] = $row['pp'];
                $_SESSION['userid1'] = $row['id'];
                $_SESSION['logged_in1'] = true;
                header('Location: content7 copy.php');
                exit;
            }
        } else {
            $errorMsg = 'Email or password incorrect!';
        }
    } else {
        $errorMsg = 'Email or password incorrect!';
    }
}

// Redirect to the desired page if already logged in
if (isset($_SESSION['logged_in1']) && $_SESSION['logged_in1']) {
    header('Location: content7 copy.php');
    exit;
}
?>