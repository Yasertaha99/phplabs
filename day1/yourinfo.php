
<?php
if (
    $_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['fname'])
    && empty($_POST['lname']) && empty($_POST['address']) &&
    empty($_POST['gender']) && empty($_POST['skills']) && empty($_POST['department'])
) {
    echo "<p>No data submitted</p>";
} else {
    $fName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
    $userName = $_POST['username'];
    $country = $_POST['country'];
    $department = $_POST['department'];
    $password = $_POST['password'];

    $genderTitle = $gender == "male" ? "Mr." : "Ms";

    echo "<h1>Thanks $genderTitle $fName $lastName </h1>";
    echo "<h2>Please Review Your Information:</h2>";
    echo "<p>Name: $fName $lastName </p>";
    echo "<p>address: $address</p>";
    echo "<p>Skills: ".implode(", ", $skills)."</p>";
    echo "<p>Department: $department</p>";
}
?>