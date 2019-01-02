<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";
$Query ="SELECT * FROM `attent` ORDER By id desc";
$result = mysqli_query($db,$Query);

?>

<div class="col-sm-10">
    <h1 class="text-center">Attandance List</h1>
	<?php echo errorMsg();echo successMsg();?>
	
<?php  
if(isset($_GET['delete'])){
$delete =$_GET['delete'];
$sqlDelete ="DELETE FROM `attent` WHERE id='$delete'";
$result = mysqli_query($db,$sqlDelete);
		if($result){
			$_SESSION["successMessage"] = "Delete Successfully";
			header("Location:techerlist.php");
		}else{
			$_SESSION["errorMessage"]="Delete Faield";
			header("Location:techerlist.php");
		}

} ?>
	<div class="container-fluid">
            <div class="row-fluid  table-responsive ">
			<table class="table table-striped table-bordered">
			<thead>
			<tr>
			<th>SL</th>
			<th>Roll</th>
			<th>Attend</th>
			<th>Time</th>
			
			</tr>
			</thead>
			<tbody>
			<?php $i=1;  while($DataRows = mysqli_fetch_assoc($result)):?>
			<tr>
			<td><?php echo $i++; ?></td>
			<td><a href="info.php?info=<?php echo $DataRows['id']; ?>"><?php echo $DataRows['roll']?></a></td>
			<td><?php echo $DataRows['attend']?></td>
			<td><?php echo $DataRows['time']?></td>
			<td><a href="editstudent.php?edit=<?php echo $DataRows['id']; ?>"><span class="glyphicon glyphicon-edit re"></span></a><a href="studentlist.php?delete=<?php echo $DataRows['id']; ?>"><span class="glyphicon glyphicon-remove re"></span></a></td>
			</tr>
			<?php endwhile; ?>
			</tbody>
			</table>
</div>
        </div>
	</div>
</div>
</div>

<?php include "layout/footer.php"; ?>

