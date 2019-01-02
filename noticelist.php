<?php 
include "db/db.php";
include "layout/head.php"; 
include "function/session.php";
include "function/function.php";
$Query ="SELECT * FROM `notice` ORDER By id desc";
$result = mysqli_query($db,$Query);

?>

<div class="col-sm-10">
    <h1 class="text-center">Notice List</h1>
	<?php echo errorMsg();echo successMsg();?>
	
<?php  
if(isset($_GET['delete'])){
$delete =$_GET['delete'];
$sqlDelete ="DELETE FROM `notice` WHERE id='$delete'";
$result = mysqli_query($db,$sqlDelete);
		if($result){
			$_SESSION["successMessage"] = "Delete Successfully";
			header("Location:noticelist.php");
		}else{
			$_SESSION["errorMessage"]="Delete Faield";
			header("Location:noticelist.php");
		}

} ?>
	<div class="container-fluid">
            <div class="row-fluid  table-responsive ">
			<table class="table table-striped table-bordered">
			<thead>
			<tr>
			<th>SL</th>
			<th>Title</th>
			<th>Notice</th>
			
			</tr>
			</thead>
			<tbody>
			<?php $i=1;  while($DataRows = mysqli_fetch_assoc($result)):?>
			<tr>
			<td><?php echo $i++; ?></td>
			<td><a href="info.php?info=<?php echo $DataRows['id']; ?>"><?php echo $DataRows['title']?></a></td>
			<td><?php echo $DataRows['notice']?></td>
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

