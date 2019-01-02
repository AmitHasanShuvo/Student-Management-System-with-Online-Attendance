<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$roll = $_POST["roll"];
	$reg = $_POST["reg"];
	$depatment = $_POST["depatment"];
	$pass = $_POST["pass"];
	$password = $_POST["password"];
	if(empty($name)){
		$_SESSION["errorMessage"]="Name can't be empty";
		Redirect_to("addstudent.php");
	}
	if(empty($roll)){
		$_SESSION["errorMessage"]="Roll can't be empty";
		Redirect_to("addstudent.php");
	}elseif(strlen($roll)>7){
		$_SESSION["errorMessage"]="Roll too long";
		Redirect_to("addstudent.php");
	}
	if(empty($reg)){
		$_SESSION["errorMessage"]="Reg can't be empty";
		Redirect_to("addstudent.php");
	}elseif(strlen($reg)>7){
		$_SESSION["errorMessage"]="Reg too long";
		Redirect_to("addstudent.php");
	}
	if(empty($depatment)){
		$_SESSION["errorMessage"]="Depatment can't be empty";
		Redirect_to("addstudent.php");
	}
	if($pass !== $password){
		$_SESSION["errorMessage"]="Password Not Match";
		Redirect_to("addstudent.php");
	}else{
		$Query = "INSERT INTO `students`(`name`, `roll`, `reg`, `depatment`, `password`) VALUES ('$name','$roll','$reg','$depatment','$pass')";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "Student Info Submit Successfully";
			Redirect_to("addstudent.php");
		}else{
			$_SESSION["errorMessage"]="Faild";
			Redirect_to("addstudent.php");
		}
	}
}

?>
<div class="col-sm-10">
    <h1 class="text-center">Add Students</h1>
	<?php echo errorMsg();echo successMsg();?>
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="" method="post">
				<div class="form-group">	
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			  </div>
			  <div class="form-group">
				<label for="roll">Roll:</label>
				<input type="text" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
			  </div>
			  <div class="form-group">
				<label for="reg">Registron:</label>
				<input type="text" class="form-control" id="reg" placeholder="Enter Registron"  name="reg">
			  </div>
			  <div class="form-group">
				<label for="depatment">Depatment:</label>
				<input type="text" class="form-control" id="depatment" placeholder="Depatment"  name="depatment">
			  </div>
			   <div class="form-group">
				<label for="pass">Password:</label>
				<input type="text" class="form-control" id="pass" placeholder="Password"  name="pass">
			  </div>
			   <div class="form-group">
				<label for="password">Confirm Password:</label>
				<input type="text" class="form-control" id="password" placeholder="Confirm Password"  name="password">
			  </div>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
			
			</form>
            </div>
        </div>
	
	
	</div>
<?php include "layout/footer.php"; ?>