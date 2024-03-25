<html lang="en">

<head>
    <title>Students-Records</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/new.css">
</head>

<body>
    <!-- Gutter g-1 -->
    <div class="container mt-3 shadow">
        <h1 class="bg-success text-center text-white p-2">Add Student</h1>
        <div class="row g-1">
            <div class="col">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-2">

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

        <div class="row g-1">
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
                    <input type="integer" name="mobile-no" placeholder="Enter Your Mobile No" class="form-control" />
                </div>
            </div>
        </div>

        <div class="row g-1">
            <div class="col">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-2">

                    <label class="form-label" for="form9Example1"><b>Gender*:</b></label>
                    <input type="text" name="gender" placeholder="Enter Your Gender" class="form-control" />
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
            <input type="submit" class="btn btn-success w-100 mb-3" name="submit" value="Add Record">
        </div>
    </div>

    <!-- Table Data -->

    <div class="container mt-3">
        <div class="text-end">
        <a href="./insert.php" class="btn btn-danger mb-3 text-right">+Add Student</a>
        </div>
        <h2 class="text-center text-white bg-success p-2 mb-3">Students Records</h2>
        <table class="table table-info table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>                   
                </tr>
            </thead>
            <tbody>

</body>

</html>