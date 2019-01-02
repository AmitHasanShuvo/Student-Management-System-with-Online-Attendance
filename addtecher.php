<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$depatment = $_POST["depatment"];
	$pass = $_POST["pass"];
	$password = $_POST["password"];
	if(empty($name)){
		$_SESSION["errorMessage"]="Name can't be empty";
		Redirect_to("addtecher.php");
	}
	if(empty($phone)){
		$_SESSION["errorMessage"]="Phone can't be empty";
		Redirect_to("addtecher.php");
	}elseif(strlen($phone)>11){
		$_SESSION["errorMessage"]="Roll too long . You can use Only 11 Number";
		Redirect_to("addtecher.php");
	}
	if(empty($email)){
		$_SESSION["errorMessage"]="Email can't be empty";
		Redirect_to("addtecher.php");
	}
	if(empty($depatment)){
		$_SESSION["errorMessage"]="Depatment can't be empty";
		Redirect_to("addtecher.php");
	}
	if($pass !== $password){
		$_SESSION["errorMessage"]="Password Not Match";
		Redirect_to("addtecher.php");
	}else{
		$Query = "INSERT INTO `techers`(`name`, `phone`, `email`, `depatment`, `password`) VALUES ('$name','$phone','$email','$depatment','$pass')";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "Techer Info Submit Successfully";
			Redirect_to("addtecher.php");
		}else{
			$_SESSION["errorMessage"]="Techer Info Submit  Faild";
			Redirect_to("addtecher.php");
		}
	}
}

?>
<div class="col-sm-10">
    <h1 class="text-center">Add Techer</h1>
	<?php echo errorMsg();echo successMsg();?>
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="" method="post">
				<div class="form-group">	
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			  </div>
			  <div class="form-group">
				<label for="phone">Phone:</label>
				<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
			  </div>
			  <div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email Address"  name="email">
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