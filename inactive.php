<?php
include("./Configure.php");

$id = $_GET['id'];  
if(!empty( $id )){

    $active_status_qry = "UPDATE students_records SET student_status=0 WHERE student_id = '$id'";
    $active_status_qry_run = mysqli_query($db_conn,$active_status_qry);
    if($active_status_qry_run){
        
        header("Location:students_records.php");
    }
}

?>
