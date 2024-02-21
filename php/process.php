<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Form Validation Result </h1>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
$country = $_POST['country'];
$errors = [];

//Validate ID
if (empty($id)) {
    $errors[] = 'ID is required.';
}
elseif(!is_numeric($id))
{
    $errors[] = 'ID must be numeric.';
}

// Validate Name
if (empty($name)) {
    $errors[] = 'Name is required.';
}

// Validate Email
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
}
elseif(strlen($email<5))
{
    $errors[]="Email is too short";
}

// Validate Gender
if (empty($gender)) {
    $errors[] = 'Gender is required.';
}

// Validate Interests (at least one checkbox selected)
if (empty($hobbies)) {
    $errors[] = 'At least one hobbies must be selected.';
}

// Validate Country
if (empty($country)) {
    $errors[] = 'Country is required.';
}

if (!empty($errors)) {
    // Display validation errors
    echo '<h2>Form Validation Errors</h2>';
    echo '<ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
} else {
    // Display successful submission message
    echo '<h2>Form Submitted Successfully</h2>';
    echo '<p>ID: ' . $id . '</p>';
    echo '<p>Name: ' . $name . '</p>';
    echo '<p>Email: ' . $email . '</p>';
    echo '<p>Gender: ' . $gender . '</p>';
    echo '<p>Hobbies: ' . implode(', ', $hobbies) . '</p>';
    echo '<p>Country: ' . $country . '</p>';
}
?>
</body>
</html>