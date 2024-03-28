<?php
include("Configure.php");

    $id = $_GET['id'];  

    if(!empty($id)){

    $sql = "SELECT * FROM students_records WHERE students_records.student_id = $id";
    $result = mysqli_query($db_conn, $sql);

    if(mysqli_num_rows( $result ) > 0) {
        $result = mysqli_fetch_assoc($result);
        $sql = "SELECT * FROM students_records";
        // echo "<pre>"; print_r($result); echo "</pre>";
    }
}
else{
    header("Location:students_records.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Record</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./Bootstrap/js/style.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/new.css">
</head>
<body>
    <!-- Gutter g-1 -->
    <div class="container mt-5 shadow">
        <div class=" w-50 m-auto text-center">
        <h2 class=" text-dark p-2">Edit Student Record</h2>
        </div>
        <form action="./update.php" method="POST">
        <input type="hidden" name="id" value="<?=$result['student_id']?>">
            <div class="row g-1 p-3">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>Name*:</b></label>
                        <input type="text" name="name" value="<?=$result['student_name']?>" placeholder="Enter Your Name" class="form-control" required/>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Father Name*:</b></label>
                        <input type="text" name="father-name" value="<?=$result['student_father_name']?>" placeholder="Enter Your Father Name" class="form-control" required />
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>CNIC*:</b></label>
                        <input type="text" name="cnic" value="<?=$result['student_cnic']?>" data-inputmask="'mask': '99999-9999999-9'" required="" placeholder="XXXXX-XXXXXXX-X" class="form-control" readonly/>
                    </div>
                </div>
            </div>

            <div class="row g-1 p-3">
                
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Mobile No*:</b></label>
                        <input type="text" name="mobile-no" value="<?=$result['student_mobile']?>" data-inputmask="'mask': '0399-99999999'" placeholder="0399-99999999" required="" maxlength = "12" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>Gender*:</b></label>
                        <select name="gender" value="<?=$result['student_gender']?>" class="w-100 form-control">
                            <option selected disabled>Choose Your Gender</option>
                            <option value="male" <?php echo ($result['student_gender'] == 'Male') ? 'selected' : ""?>>Male</option>
                            <option value="female" <?php echo ($result['student_gender'] == 'Female') ? 'selected' : ""?>>Female</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form9Example2"><b>Email*:</b></label>
                        <input type="email" name="email" value="<?=$result['student_email']?>" placeholder="abc@gmail.com" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="m-auto text-center">
                <input type="submit" class="btn btn-success mb-3" name="submit" value="Update & Save">
            </div>
        </form>
    </div>

</body>
</html>