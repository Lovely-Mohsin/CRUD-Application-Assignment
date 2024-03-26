<?php

include("Configure.php");


if ($_POST['submit']) {

    if (!isset($_POST['name']) || empty($_POST['name'])) {
        die('Name field is required');
    }

    $id = $_POST['id'];
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $fname = $_POST['father-name'];
    $cnic = $_POST['cnic'];
    $mobileno = $_POST['mobile-no'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "UPDATE students_records SET Name='$name', Email = '$email', City = '$city', Age = '$age', gender = '$gender' WHERE students_id = $id";

    if(mysqli_query($db_conn,$sql)){
        

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>update record</title>
</head>
<body>
    
</body>
</html>