<?php
session_start();

/*
|--------------------------------------------------------------------------
| Smart Future Academy - Admin Login Process
|--------------------------------------------------------------------------
| This file handles admin authentication and redirects the user
| to the admin dashboard after successful login.
|--------------------------------------------------------------------------
*/

// Redirect if accessed directly
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: admin_login.php");
    exit();
}

// Database Connection
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "school_admission_system";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Get Form Data
$admin_username = trim($_POST['username']);
$admin_password = trim($_POST['password']);

// Validate Empty Fields
if (empty($admin_username) || empty($admin_password)) {
    $_SESSION['login_error'] = "Please fill in all fields.";
    header("Location: admin_login.php");
    exit();
}

// Prevent SQL Injection
$admin_username = mysqli_real_escape_string($conn, $admin_username);

// Check Admin Credentials
$sql = "SELECT * FROM admin WHERE username='$admin_username' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $admin = mysqli_fetch_assoc($result);

    /*
    |--------------------------------------------------------------------------
    | Password Verification
    |--------------------------------------------------------------------------
    | If you use password_hash(), keep password_verify().
    | If you store plain text passwords, use direct comparison instead.
    |--------------------------------------------------------------------------
    */

    if (password_verify($admin_password, $admin['password']) || $admin_password === $admin['password']) {

        // Store Session Variables
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['username'];
        $_SESSION['admin_logged_in'] = true;

        // Redirect to Dashboard
        header("Location: admin_dashboard.php");
        exit();

    } else {
        $_SESSION['login_error'] = "Incorrect Password!";
        header("Location: admin_login.php");
        exit();
    }

} else {
    $_SESSION['login_error'] = "Admin account not found!";
    header("Location: admin_login.php");
    exit();
}

// Close Connection
mysqli_close($conn);
?>