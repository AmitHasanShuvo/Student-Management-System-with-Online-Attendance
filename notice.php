<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";

if(isset($_POST["submit"])){
	$title = $_POST["title"];
	$notice = $_POST["notice"];

	if(empty($title)){
		$_SESSION["errorMessage"]="Title can't be empty";
		Redirect_to("notice.php");
	}
	if(empty($notice)){
		$_SESSION["errorMessage"]="Notice can't be empty";
		Redirect_to("notice.php");
	}else{
		$Query = "INSERT INTO `notice`(`title`, `notice`) VALUES ('$title','$notice')";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "Notice Upload Successfully";
			Redirect_to("notice.php");
		}else{
			$_SESSION["errorMessage"]="Notice Upload Faild";
			Redirect_to("notice.php");
		}
	}
}

?>
<div class="col-sm-10">
    <h1 class="text-center">Add Notice</h1>
	<?php echo errorMsg();echo successMsg();?>
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="" method="post">
				<div class="form-group">	
				<label for="title">Notice Title:</label>
				<input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
			  </div>
			  <div class="form-group">
				<label for="notice">Notice:</label>
				<textarea  class="form-control" id="noticr" placeholder="Write Notice" name="notice" rows="10px"></textarea>
			  </div>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
			
			</form>
            </div>
        </div>
	</div>
<?php include "layout/footer.php"; ?>