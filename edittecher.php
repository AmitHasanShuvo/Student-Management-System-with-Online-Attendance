<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";
$edit = $_GET['edit'];
if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$depatment = $_POST["depatment"];
	if(empty($name)){
		$_SESSION["errorMessage"]="Name can't be empty";
		Redirect_to("edittecher.php");
	}
	if(empty($phone)){
		$_SESSION["errorMessage"]="Phone can't be empty";
		Redirect_to("edittecher.php");
	}elseif(strlen($phone)>11){
		$_SESSION["errorMessage"]="Roll too long . You can use Only 11 Number";
		Redirect_to("edittecher.php");
	}
	if(empty($email)){
		$_SESSION["errorMessage"]="Email can't be empty";
		Redirect_to("edittecher.php");
	}
	if(empty($depatment)){
		$_SESSION["errorMessage"]="Depatment can't be empty";
		Redirect_to("edittecher.php");
	}
	else{
		$Query = "UPDATE `techers` SET `name`='$name',`phone`='$phone',`email`='$email', `depatment`='$depatment' WHERE id ='$edit'";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "Techer Upadate Successfully";
			Redirect_to('edittecher.php'.'?edit='.$edit);
		}else{
			$_SESSION["errorMessage"]="Faield";
			Redirect_to("edittecher.php");
		}
	}
}

?>
<?php 
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$sql = "SELECt * FROM techers WHERE id ='$id'";
	$sqlResult = mysqli_query($db,$sql);
	$DataRowsSql = mysqli_fetch_assoc($sqlResult);
} ?>
<div class="col-sm-10">
    <h1 class="text-center">Edit Techer</h1>
	<?php echo errorMsg();echo successMsg();?>
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="edittecher.php?edit=<?php echo $edit;?>" method="post">
				<div class="form-group">	
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $DataRowsSql['name'];?>">
			  </div>
			  <div class="form-group">
				<label for="phone">Phone:</label>
				<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo $DataRowsSql['phone'];?>">
			  </div>
			  <div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email Address"  name="email" value="<?php echo $DataRowsSql['email'];?>">
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