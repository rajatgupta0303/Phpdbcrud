<?php
error_reporting(0);
include_once("config.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $Name = $_POST['name'];
    $Dob = $_POST['dob'];
    $Gender = $_POST['gender'];
    $Department = $_POST['department'];
    $Dmanager = $_POST['dmanager'];
    $Salary = $_POST['salary'];
    $join_date = $_POST['date'];

        $result = mysqli_query($conn, "UPDATE `employee` SET `name`='$Name',`dob`='$Dob',`gender`='$Gender',`department`='$Department',`dept_manager`='$Dmanager',`salary`='$Salary',`join_date`='$join_date' where id=$id ") ;
       header("Location:employee.php");
    
}
else{ 
	echo "sorry";
}
?>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM `employee` WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
$Name = $row['name'];
$Dob = $row['dob'];
$Gender = $row['gender'];
$Department = $row['department'];
$Dmanager = $row['dept_manager'];
$Salary = $row['salary'];
$join_date = $row['join_date'];

}
?>

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
              
                <form method="POST" action="emp_update.php">
					  <h2 style="padding-top:40px;">Add New Employee</h2>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required="required" name="name" placeholder="Name" value="<?php echo $Name;?>">

                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">D.O.B</label>
                        <input type="text" class="form-control" required="required" name="dob" placeholder="Date Of Birth" value="<?php echo $Dob;?>" >
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <input required="required" class="form-control" id="inputSource" name="gender"
                            placeholder="Gender" value="<?php echo $Gender;?>" >
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group ">
                        <label for="inputLName">Department</label>
                        <input type="text" class="form-control" required="required" name="department" placeholder="department" value="<?php echo $Department;?>">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Department Manager</label>
                         <input type="text" class="form-control" required="required" name="dmanager" placeholder="Manager Name" value="<?php echo $Dmanager;?> ">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group ">
                        <label for="inputLName">Salary</label>
                        <input type="text" class="form-control" required="required" name="salary" placeholder="Salary" value="<?php echo $Salary;?>">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Join Date</label>
                       <input type="text" class="form-control" required="required" name="date" value="<?php echo $join_date;?>" >
                        <span class="help-block" ></span>
                    </div>
                    <div class="form-actions">
                    	<input type="hidden" name="id" value=<?php echo $_GET['id'];?> > </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                       <!--<button type="submit" class="btn btn-success">Create</button>-->
                        <a class="btn btn btn-default" href="index.php">Back</a>

                        <!-- <tr>
         <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>> </td>
         <td><input type="submit" name="update" value="Update"></td>
    </tr>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
