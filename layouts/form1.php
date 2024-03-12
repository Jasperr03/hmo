<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Health Profile</title>
    <link href="css/form1.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>
<body>
    <div class="studHP-header">
        <p>Republic of the Philippines</p>
        <p>Province of Bukidnon</p>
        <h5>Northern Bukidnon State College</h5>
        <p>Municipality of Manolo Fortich</p>
        <h5>STUDENT HEALTH PROFILE</h5>
    </div>
    <div class="container" style="padding-top: 10px;">
        <!-- Personal Profile-->
        <div class="row">
            <div class="col">
                    <form>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="clinicFileNum" class="form-label">College Clinic File Number</label>
                        <input type="text" class="form-control" id="InputclinicFileNum">
                    </div>
                    <div class="mb-3">
                        <label for="College Curse" class="form-label">College Course</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm course">
                            <option value="0">Select Course</option>
                            <option value="1">Teacher Education Program</option>
                            <option value="2">Buisiness Administration</option>
                            <option value="3">Bacher In Information Technology</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Year Level" class="form-label">Year Level</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm yearLevel">
                            <option value="0">Select Year Level</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="3">4th Year</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>

            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="InputStudentName">
                    </div>
                    <div class="mb-3">
                        <label for="studentAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="InputStudentAge">
                    </div>
                    <div class="mb-3">
                        <label for="Sex" class="form-label">Sex</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm yearLevel">
                            <option value="0">Select Sex</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Birthday</label>
                        <input type="date" class="form-control" >
                    </div>
                 </form>
            </div>

            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="studentHomeAddress" class="form-label">Home Address</label>
                        <input type="text" class="form-control" id="InputHomeAddress">
                    </div>
                    <div class="mb-3">
                        <label for="Municipal" class="form-label">Municipal Address</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm municipal">
                            <option value="0">Select Municipal</option>
                            <option value="1">Manolo Fortich</option>
                            <option value="2">Sumilao</option>
                            <option value="3">Libona</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>