<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic_form";

// Define variables and set to empty values
$nameErr = $emailErr = $ageErr = $genderErr = $profilePictureErr = "";
$name = $email = $age = $gender = $profilePicture = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
        if (!filter_var($age, FILTER_VALIDATE_INT)) {
            $ageErr = "Invalid age format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_FILES["profile_picture"]["name"])) {
        $profilePictureErr = "Profile picture is required";
    } else {
        $profilePicture = $_FILES["profile_picture"]["name"];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check === false) {
            $profilePictureErr = "File is not an image.";
        }
        if ($_FILES["profile_picture"]["size"] > 500000) {
            $profilePictureErr = "Sorry, your file is too large.";
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
            $profilePictureErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        if (empty($profilePictureErr)) {
            if (!move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $profilePictureErr = "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($genderErr) && empty($profilePictureErr)) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("INSERT INTO users (name, email, age, gender, profile_picture) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $email, $age, $gender, $profilePicture);
        if ($stmt->execute()) {
            echo "<h2>Your Input:</h2>";
            echo $name . "<br>";
            echo $email . "<br>";
            echo $age . "<br>";
            echo $gender . "<br>";
            echo $profilePicture;
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
