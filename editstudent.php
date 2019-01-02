<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";
$edit = $_GET['edit'];
if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$roll = $_POST["roll"];
	$reg = $_POST["reg"];
	$depatment = $_POST["depatment"];
	if(empty($name)){
		$_SESSION["errorMessage"]="Name can't be empty";
		Redirect_to("editstudent.php");
	}
	if(empty($roll)){
		$_SESSION["errorMessage"]="Roll can't be empty";
		Redirect_to("editstudent.php");
	}elseif(strlen($roll)>6){
		$_SESSION["errorMessage"]="Roll too long . You can use Only 6 Number";
		Redirect_to("editstudent.php");
	}
	if(empty($reg)){
		$_SESSION["errorMessage"]="Reg can't be empty";
		Redirect_to("editstudent.php");
	}elseif(strlen($reg)>6){
		$_SESSION["errorMessage"]="Reg too long . You can use Only 6 Number";
		Redirect_to("editstudent.php");
	}
	if(empty($depatment)){
		$_SESSION["errorMessage"]="Depatment can't be empty";
		Redirect_to("editstudent.php");
	}
	else{
		$Query = "UPDATE `students` SET `name`='$name',`roll`='$roll',`reg`='$reg', `depatment`='$depatment' WHERE id ='$edit'";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "Student Upadate Successfully";
			Redirect_to('editstudent.php'.'?edit='.$edit);
		}else{
			$_SESSION["errorMessage"]="Student Update Faield";
			Redirect_to("editstudent.php");
		}
	}
}

?>
<?php 
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$sql = "SELECt * FROM students WHERE id ='$id'";
	$sqlResult = mysqli_query($db,$sql);
	$DataRowsSql = mysqli_fetch_assoc($sqlResult);
} ?>
<div class="col-sm-10">
    <h1 class="text-center">Edit Techer</h1>
	<?php echo errorMsg();echo successMsg();?>
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="editstudent.php?edit=<?php echo $edit;?>" method="post">
				<div class="form-group">	
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $DataRowsSql['name'];?>">
			  </div>
			  <div class="form-group">
				<label for="roll">Roll:</label>
				<input type="text" class="form-control" id="roll" placeholder="Enter Phone Number" name="roll" value="<?php echo $DataRowsSql['roll'];?>">
			  </div>
			  <div class="form-group">
				<label for="reg">Reg:</label>
				<input type="text" class="form-control" id="reg" placeholder="Enter Email Address"  name="reg" value="<?php echo $DataRowsSql['reg'];?>">
			  </div>
			  <div class="form-group">
				<label for="depatment">Depatment:</label>
				<input type="text" class="form-control" id="depatment" placeholder="Depatment"  name="depatment" value="<?php echo $DataRowsSql['depatment'];?>">
			  </div>
      <button type="submit" class="btn btn-success" name="submit">Update</button>
			
			</form>
            </div>
        </div>
	
	
	</div>
<?php include "layout/footer.php"; ?>