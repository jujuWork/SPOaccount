<?php
/**
 * Backend Processing File
 * This file handles all database operations
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session to store messages
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database configuration - Use WordPress database constants
$host = DB_HOST;
$dbname = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;

// Initialize response variables
$success_message = '';
$error_message = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get form data and sanitize
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = $_POST['pass'];
    $checkbox = isset($_POST['checkbox']) ? 1 : 0;
    
    // Basic validation
    if (empty($name) || empty($email) || empty($pass)) {
        $error_message = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format!";
    } elseif ($checkbox == 0) {
        $error_message = "You must agree to the terms & policy!";
    } else {
        try {
            // Create PDO connection
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            // Set error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Check if email already exists
            $check_sql = "SELECT email FROM wp_users_registration WHERE email = :email";
            $check_stmt = $pdo->prepare($check_sql);
            $check_stmt->bindParam(':email', $email);
            $check_stmt->execute();
            
            if ($check_stmt->rowCount() > 0) {
                $error_message = "Email already registered!";
            } else {
                // Hash the password for security
                $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
                
                // Prepare SQL statement
                $sql = "INSERT INTO wp_users_registration (name, email, password, agreed_terms, created_at) 
                        VALUES (:name, :email, :password, :agreed_terms, NOW())";
                
                $stmt = $pdo->prepare($sql);
                
                // Bind parameters
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashed_password);
                $stmt->bindParam(':agreed_terms', $checkbox);
                
                // Execute the statement
                if ($stmt->execute()) {
                    $success_message = "Registration successful! Welcome, " . htmlspecialchars($name) . "!";
                    
                    // Optional: Clear form by redirecting after successful registration
                    // Uncomment the lines below if you want to redirect
                    // $_SESSION['success_message'] = $success_message;
                    // header("Location: " . $_SERVER['REQUEST_URI']);
                    // exit();
                }
            }
            
        } catch(PDOException $e) {
            $error_message = "Database error: " . $e->getMessage();
        }
        
        // Close connection
        $pdo = null;
    }
}
?>