<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body>
<?php
	include("header.php");
	?>
	<div></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
              
                <form method="POST" action="emp.php">
					  <h2 style="padding-top:40px;">Add New Employee</h2>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required="required" name="name" placeholder="Name">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">D.O.B</label>
                        <input type="text" class="form-control" required="required" name="dob" placeholder="Date Of Birth">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <input required="required" class="form-control" id="inputSource" name="gender"
                            placeholder="Gender">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group ">
                        <label for="inputLName">Department</label>
                        <input type="text" class="form-control" required="required" name="department" placeholder="department">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Department Manager</label>
                         <input type="text" class="form-control" required="required" name="dmanager" placeholder="Manager Name">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group ">
                        <label for="inputLName">Salary</label>
                        <input type="text" class="form-control" required="required" name="salary" placeholder="Salary">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Join Date</label>
                       <input type="text" class="form-control" required="required" name="date">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-actions">
						<input type="submit" name="submit" value="Submit"></tr>
                       <!--<button type="submit" class="btn btn-success">Create</button>-->
                        <a class="btn btn btn-default" href="index.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
