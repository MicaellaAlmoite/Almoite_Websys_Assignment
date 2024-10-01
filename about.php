<?php SESSION_START() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-4">User Information</h2>

        <?php
        $errors = [];
        $name = $email = $pwd = $cpwd = $phone = $gender = $country = $bio = '';

        function sanitizeData($data) {
            return htmlspecialchars(trim($data));
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = sanitizeData($_POST['name']);
            $email = sanitizeData($_POST['email']);
            $url = sanitizeData($_POST['url']);
            $pwd = sanitizeData($_POST['pwd']);
            $cpwd = sanitizeData($_POST['cpwd']);
            $phone = sanitizeData($_POST['phone']);
            $gender = isset($_POST['gender']) ? sanitizeData($_POST['gender']) : '';
            $country = sanitizeData($_POST['country']);
            $bio = sanitizeData($_POST['bio']);

            $skills = isset($_POST['skills']) ? $_POST['skills'] : [];

            if (empty($name)) {
                $errors[] = "Name is required.";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Valid email is required.";
            }
            if (empty($url)) {
                $errors[] = 'Website URL cannot be empty.';
            } 
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $errors[] = 'Please enter a valid website URL.';
            }
            if (strlen($pwd) < 8) {
                $errors[] = "Password must be at least 8 characters long.";
            }
            if (!preg_match('/[A-Z]/', $pwd)) {
                $errors[] = 'Password must contain at least one uppercase letter.';
             }
            if ($pwd !== $cpwd) {
                $errors[] = "Passwords do not match.";
            }
            if (!preg_match('/^09\d{9}$/', $phone)) {
                $errors[] = "Phone number must be a valid format starting with '09' and followed by 9 digits.";
            }
            if (empty($gender)) {
                $errors[] = "Gender is required.";
            }
            if (empty($country)) {
                $errors[] = "Country is required.";
            }
            if (empty($bio) || strlen($bio) > 200) {
                $errors[] = "Biography is required and must not exceed 200 characters.";
            }

            if (count($errors) > 0) {
                echo '<div class="alert alert-danger" role="alert">';
                echo '<strong>Please fix the following errors:</strong><br>';
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
                echo '</div>';
            } else {
                
                echo '<div class="card shadow-lg p-4">';
                echo '<div class="card-body">';
                echo "<p class='card-text'><b>Name:</b> $name</p>";
                echo "<p class='card-text'><b>Phone:</b> $phone</p>";
                echo "<p class='card-text'><b>Email:</b> $email</p>";
                echo "<p class='card-text'><b>Facebook URL:</b> $url</p>";
                echo "<p class='card-text'><b>Gender:</b> $gender</p>";
                echo "<p class='card-text'><b>Country:</b> $country</p>";

            
                if (!empty($skills)) {
                    echo "<p class='card-text'><b>Skills:</b> " . implode(", ", $skills) . "</p>";
                } else {
                    echo "<p class='card-text'><b>Skills:</b> None</p>";
                }

                echo "<p class='card-text'><b>Biography:</b> $bio</p>";
                echo '</div>';
                echo '</div>';
            }
        } else {
            
            header("Location: home.php");
            exit;
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>