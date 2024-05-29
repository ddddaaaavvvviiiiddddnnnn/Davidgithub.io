<?php
$errors = [];
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate Name
    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required.";
    } else {
        $data['name'] = htmlspecialchars($_POST['name']);
    }

    // Validate Email
    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    } else {
        $data['email'] = htmlspecialchars($_POST['email']);
    }

    // Validate Age
    if (empty($_POST['age'])) {
        $errors['age'] = "Age is required.";
    } elseif (!filter_var($_POST['age'], FILTER_VALIDATE_INT, array("options" => array("min_range"=>1, "max_range"=>120)))) {
        $errors['age'] = "Age must be a number between 1 and 120.";
    } else {
        $data['age'] = intval($_POST['age']);
    }

    // Validate Gender
    if (empty($_POST['gender'])) {
        $errors['gender'] = "Gender is required.";
    } else {
        $data['gender'] = htmlspecialchars($_POST['gender']);
    }

    // Validate Profile Picture
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($_FILES['profile_picture']['tmp_name']);
        
        if (!in_array($file_type, $allowed_types)) {
            $errors['profile_picture'] = "Invalid file type. Only JPG, PNG, and GIF are allowed.";
        } else {
            $uploads_dir = 'uploads';
            if (!is_dir($uploads_dir)) {
                mkdir($uploads_dir, 0777, true);
            }
            $file_name = basename($_FILES['profile_picture']['name']);
            $target_path = $uploads_dir . '/' . $file_name;
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_path)) {
                $data['profile_picture'] = $target_path;
            } else {
                $errors['profile_picture'] = "Failed to upload the profile picture.";
            }
        }
    } else {
        $errors['profile_picture'] = "Profile picture is required.";
    }

    if (empty($errors)) {
        echo "<h2>Form Submitted Successfully</h2>";
        echo "<p>Name: {$data['name']}</p>";
        echo "<p>Email: {$data['email']}</p>";
        echo "<p>Age: {$data['age']}</p>";
        echo "<p>Gender: {$data['gender']}</p>";
        echo "<p>Profile Picture: <img src='{$data['profile_picture']}' alt='Profile Picture' width='100'></p>";
    } else {
        include('index.html');
    }
} else {
    include('index.html');
}
?>
