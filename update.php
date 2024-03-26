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
    $status =1;

    $sql = "UPDATE students_records SET student_name='$name', student_father_name = '$fname', student_cnic = '$cnic', student_mobile = '$mobileno', student_gender = '$gender' , student_email = '$email' , student_status = '$status' WHERE student_id = $id";

    if(mysqli_query($db_conn,$sql)){
        header("Location:students_records.php");

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