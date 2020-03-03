
<!DOCTYPE html>

<html lang="en">

<head>
   <?php include '../common/checkheaderscripts.php'; ?>
   <script src="../scripts/employeemaster.js"></script>
</head>

<body>
    <div class="wrapper">
		<?php include '../common/sidebar.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
			<?php include '../common/navbar.php'; ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Employee Detail</h4>
                                </div>
                                <div class="card-body">
                                    <form id="employeeregister">
										<div class="row">
											<div class="col-md-4">
											
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <!-- <input type="text" class="form-control"  placeholder="Company" value="Creative Code Inc."> -->
													<select class="form-control">
													<option>Select Employee</option>
													</select>
												</div>
											</div>
										</div>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="firstname" id="empfirstname"  placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" name="middlename" id="empmiddlename" placeholder="Enter Middle Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text" name="lastname" id="emplastname" class="form-control" placeholder="Enter Last Name">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Initial:</label>
                                                    <input type="text" class="form-control" name="initial" id="empinitial" placeholder="Enter Initial">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Father Name</label>
                                                    <input type="text" class="form-control" name="fathername" id="empfathername"  placeholder="Enter Father Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Spouse Name</label>
                                                    <input type="text" class="form-control" name="spousename" id="empspousename" placeholder="Enter Spouse Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date Of Birth</label>
                                                    <input  type="text" class="form-control datepicker" name="dob" id='empdob' placeholder="">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Entity:</label>
                                                    <input type="text" class="form-control" name="entity" id="empentity" placeholder="Enter Entity">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Department</label>
													<select name="department" id="empdepartment" class="form-control">
													<option>Select Department</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Designation</label>
													<select class="form-control" name="designation" id="empdesignation">
													<option>Select Designation</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Reporting Person</label>
													<select class="form-control" name="reportingperson" id="empreportingperson">
													<option>Select Reporting Person</option>
													</select>
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Employment Type:</label>
													<select class="form-control" name="employmenttype" id="empemoloymenttype">
													<option>Select Employment Type</option>
													</select>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Job Band</label>
													<select class="form-control" name="jobband" emp="empjobband">
													<option>Select Job Band</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Joining Date</label>
                                                    <input type="text" class="form-control" name="joiningdate" id="empjoiningdate" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Alternate Number:</label>
                                                    <input type="text" class="form-control" placeholder="Enter Alternate Number">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>PAN Number</label>
													<input type="text" class="form-control" placeholder="Enter PAN Number" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>AADHAR Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter AADHAR Number" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">UAN(PF)</label>
                                                    <input type="text" class="form-control" placeholder="Enter UAN">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Passport Number:</label>
                                                    <input type="text" class="form-control" placeholder="Enter Passport Number ">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>ESI Number</label>
													<input type="text" class="form-control" placeholder="Enter ESI Number" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Employment Status</label>
													<select class="form-control">
													<option>Select Employment Status</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Company Email</label>
                                                    <input type="text" class="form-control" placeholder="Enter Company Email">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Personal Email:</label>
                                                    <input type="text" class="form-control" placeholder="Enter Personal Email">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Blood Group</label>
													<input type="text" class="form-control" placeholder="Enter Blood Group" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control">
													<option>Select Gender</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Resignation Date</label>
                                                    <input type="text" class="form-control" placeholder="Enter Resignation Date">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Leaving Date:</label>
                                                    <input type="text" class="form-control" placeholder="Enter Leaving Date">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Emergency Contact Name</label>
													<input type="text" class="form-control" placeholder="Enter Emergency Contact Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Emergency Contact Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Emergency Contact Number" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Emergency Contact Relationship</label>
                                                    <input type="text" class="form-control" placeholder="Enter Emergency Contact Relationship">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Shift:</label>
                                                    <input type="text" class="form-control" placeholder="Enter Shift">
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
													<input type="text" class="form-control" placeholder="Enter Bank Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Bank Account Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Bank Account Number" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">IFSC Code</label>
                                                    <input type="text" class="form-control" placeholder="Enter IFSC Code">
                                                </div>
											</div>
											<div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Upload:</label>
                                                    <input type="file" class="form-control" placeholder="">
                                                </div>
                                            </div>
										</div>
                                       
                                      
                                      
                                        <button type="submit" id="btnSave" class="btn btn-info btn-fill pull-right">Save Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
             
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>


</body>

</html>
