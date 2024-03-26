<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Record</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/new.css">
</head>
<body>
    <!-- Gutter g-1 -->
    <div class="container mt-3 shadow">
        <h2 class="bg-success text-center text-white p-2">Edit Student Record</h2>
        <form action="./students_records.php" method="POST">
            <div class="row g-1 p-2">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">
                        <input type="hidden" name="id">

                        <label class="form-label" for="form9Example1"><b>Name*:</b></label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Father Name*:</b></label>
                        <input type="text" name="father-name" placeholder="Enter Your Father Name" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row g-1 p-2">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>CNIC*:</b></label>
                        <input type="integer" name="cnic" placeholder="Enter Your CNIC" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form9Example2"><b>Mobile No*:</b></label>
                        <input type="integer" value="" name="mobile-no" placeholder="Enter Your Mobile No" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row g-1 p-2">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-2">

                        <label class="form-label" for="form9Example1"><b>Gender*:</b></label>
                        <select name="gender" class="w-100 form-control">
                            <option value="male" selected disabled>Choose Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form9Example2"><b>Status*:</b></label>
                        <input type="integer" name="status" placeholder="Enter Your Status" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="">
                <input type="submit" class="btn btn-success w-100 mb-3" name="submit" value="Update Record">
            </div>
        </form>
    </div>

</body>
</html>