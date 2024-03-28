<?php
include("Configure.php");

if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    if(empty($name)){
        echo '<div class="alert alert-danger">
        <strong>Warning!</strong> Name Field is Required.
        </div>';
        exit();
    }
    $fname = $_POST["father-name"];
    $cnic = $_POST["cnic"];

    $already_exist_record_qry = "SELECT student_cnic FROM students_records WHERE  student_cnic='$cnic'";
    $already_exist_record_qry_run = mysqli_query($db_conn, $already_exist_record_qry);
    $get_num_rows_qry = mysqli_num_rows($already_exist_record_qry_run);
    if($get_num_rows_qry > 0){
        echo '<div class="alert alert-danger">
        <strong>Warning!</strong> This CNIC is already Registered.
        </div>';
        exit();
    }


    $mobileno = $_POST["mobile-no"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $status = 1;

    $sql = "INSERT INTO students_records (`student_name` , `student_father_name` , `student_cnic` , `student_mobile`, `student_gender` , `student_email` , `student_status`) VALUES ('$name' , '$fname' , '$cnic' , '$mobileno' , '$gender' , '$email' , '$status')";
    $result = mysqli_query($db_conn, $sql);

    if ($result) {
        // echo 'Data Inserted Successfully';
    }
}

?>

<html lang="en">

<head>
    <title>Students-Records</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/new.css">

</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"  href="#"><h3>Student Management System</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navbar Code End -->

    <!-- Gutter g-1 -->
    <div class="container mt-5 border">
        <div class="w-50 m-auto ">
            <h2 class=" text-center text-dark p-2">Students Record</h2>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="row g-1 p-3">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>Name*:</b></label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required/>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Father Name*:</b></label>
                        <input type="text" name="father-name" placeholder="Enter Your Father Name" class="form-control" required/>
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>CNIC*:</b></label>
                        <input type="text" name="cnic" data-inputmask="'mask': '99999-9999999-9'" required="" placeholder="XXXXX-XXXXXXX-X" class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="row g-1 p-3">

                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Mobile No*:</b></label>
                        <input type="text" value="" name="mobile-no" data-inputmask="'mask': '9999-99999999'" placeholder="XXXX-XXXXXXX" required="" maxlength="12" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>Gender*:</b></label>
                        <select name="gender" class="w-100 form-control">
                            <option selected disabled>Choose Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form9Example2"><b>Email*:</b></label>
                        <input type="email" name="email" placeholder="abc@gmail.com" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="m-auto text-center">
                <input type="submit" class="btn btn-success mb-3 text-white" name="submit" value="Add Student">
            </div>
        </form>
    </div>
    <br>
    <!-- Table Data -->

    <div class="container mt-3 mb-5">

        <h2 class="text-center text-dark p-2 mb-3">Registered Students</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sr#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?Php
                include("Configure.php");
                $sql = "SELECT * FROM students_records WHERE student_status != -1";
                $result = mysqli_query($db_conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['student_id'];
                        $name = $row['student_name'];
                        $fname = $row['student_father_name'];
                        $cnic = $row['student_cnic'];
                        $mobileno = $row['student_mobile'];
                        $gender = $row['student_gender'];
                        $email = $row['student_email'];
                        $status = $row['student_status'];


                ?>

                        <tr>
                            <th><?php echo $id ?></th>
                            <td><?php echo $name ?></td>
                            <td><?php echo $fname ?></td>
                            <td><?php echo $cnic ?></td>
                            <td><?php echo $mobileno ?></td>
                            <td><?php echo $gender ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php
                            if($status == 1){
                                echo '<span class="badge bg-success">Active</span>';

                            }
                            else{
                                echo '<span class="badge bg-warning">Inactive</span>';
 
                            }
                            ?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        -- Actions --
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="edit.php?id=<?= $id ?>"><b>Edit</b></a></li>
                                        <li><a class="dropdown-item"  href="active.php?id=<?= $id ?>"><b>Active</b></a></li>
                                        <li><a class="dropdown-item" href="inactive.php?id=<?= $id ?>"><b>Inactive</b></a></li>
                                        <li><a class="dropdown-item" href="remove.php?id=<?= $id ?>"><b>Remove</b></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>

</body>

</html>
<script src="./Masking/jquery.min.js"></script>
<script src="./Masking/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>