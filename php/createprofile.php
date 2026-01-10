<?php
session_start();
require_once "database_login_values.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data with validation
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $occupation = $_POST['occupation'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($occupation) || empty($age) || empty($gender)) {
        echo "All fields are required.";
        exit();
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }
    
    // Validate age
    if (!is_numeric($age) || $age < 1 || $age > 120) {
        echo "Invalid age.";
        exit();
    }
    
    // File upload handling
    $targetDir = "uploads/";
    $fileName = basename($_FILES["profileImage"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowedTypes)) {
        // Ensure uploads directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        // Upload file to server
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFilePath)) {
            // File uploaded successfully

            // Store data in the database using prepared statement
            $sql = "INSERT INTO profiles (name, email, occupation, age, gender, profile_image) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("ssssss", $name, $email, $occupation, $age, $gender, $targetFilePath);
                if ($stmt->execute()) {
                    // Redirect to showprofile.php with a success message
                    $_SESSION['message'] = "Profile created successfully!";
                    header('location: home.html');
                    exit();
                } else {
                    echo "Error creating profile: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, GIF files are allowed.";
    }
}
mysqli_close($conn);
?>
