<?php
// Start the session
session_start();

// Include config file
require_once "config.php";

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare a select statement
$sql = "SELECT id, username, password FROM users WHERE username = ?";

if($stmt = mysqli_prepare($conn, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_username);

    // Set parameters
    $param_username = $username;

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1){
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $hashed_password)){
                    // Password is correct, so start a new session
                    session_start();

                    // Store data in session variables
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;

                    // Redirect user to admin dashboard
                    header('Location: admin_dashboard.php');
                } else{
                    // Password is not valid, display a generic error message
                    header('Location: login.html?error=1');
                }
            }
        } else{
            // Username doesn't exist, display a generic error message
            header('Location: login.html?error=1');
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>
