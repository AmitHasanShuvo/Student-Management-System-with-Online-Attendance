<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";
date_default_timezone_set("Asia/Dhaka");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;

$Query ="SELECT * FROM `students` ORDER BY id asc";
$result = mysqli_query($db,$Query);
if(isset($_POST['submit'])){
	// $id = $DataRows['id'];
	$attend = $_POST['attend'];
	if(empty($attend)){
		$_SESSION["errorMessage"] = "Please Fill All Field";
			Redirect_to("attent.php");
	}else{
	$Query ="SELECT * FROM `students` ORDER BY id asc";
		$result = mysqli_query($db,$Query);
		 while($DataRows = mysqli_fetch_assoc($result)){ $id = $DataRows['id'];}
		 
		foreach($attend as $attend_key=>$attend_value){
			if($attend_value == "present"){
				$sql = "INSERT INTO `attent`(`roll`,`attend`,`time`) VALUES('$attend_key','present',NoW())";
				$result = mysqli_query($db,$sql);
		}
		elseif($attend_value == "absent"){
				$sql = "INSERT INTO `attent`(`roll`,`attend`,`time`) VALUES('$attend_key','absent',NoW())";
				$result = mysqli_query($db,$sql);
		}
		}
		if($result){
			$_SESSION["successMessage"] = "Attends Upload Successfully";
			Redirect_to("attent.php");
		}else{
			mysqli_error($db);
			}			
}
}

?>
<div class="col-sm-10">
    <h1 class="text-center">Student Attends</h1>
	<?php echo errorMsg();echo successMsg(); ?>
	<div class="container-fluid">
            <div class="row-fluid  table-responsive ">
			<form action="attent.php" method="post">
			<table class="table table-striped table-bordered">
			<thead>
                <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Action</th>
                </tr>
			</thead>
			<tbody>
				<?php $i=1;  while($DataRows = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><a href="info.php?info=<?php echo $id; ?>"><?php echo $DataRows['name']?></a></td>
                    <td><?php echo $DataRows['roll']?></td>
                    <td>
                    <input type="radio" name="attend[<?php echo $DataRows['roll']?>]" value="present">P
                    <input type="radio" name="attend[<?php echo $DataRows['roll']?>]" value="absent">A
                    </td>
                </tr>
                <tr>
            <?php endwhile; ?>
			</tbody>
			</table>
			 <button type="submit" name="submit" class="btn btn-success">Submit</button>
			</form>
            </div>
        </div>
	</div>
</div>
</div>
<?php include "layout/footer.php"; ?>