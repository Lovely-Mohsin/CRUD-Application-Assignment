<?php
include("./Configure.php");

$id = $_GET['id'];

$sql = "DELETE FROM students_records WHERE student_id = $id";
$result = mysqli_query($db_conn,$sql);

if($result){
    header("Location: students_records.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Record</title>
</head>
<body>
    
</body>
</html>