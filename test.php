<?php
	$db = mysqli_connect("127.0.0.1","root","","sms");
if (mysqli_connect_errno()) {
	echo "Database Query Faield: ".mysqli_connect_error();
	exit();
}
$Query ="SELECT * FROM `students` ORDER BY id asc";
$result = mysqli_query($db,$Query);




?>
<form method="post" action="">
<table>
<?php $i=1;  while($DataRows = mysqli_fetch_assoc($result)): ?>
    <tr>
    <td>
    <input type="checkbox" name="attent[<?php echo $DataRows['roll']?>]" value="present">P
    <input type="checkbox" name="attent[<?php echo $DataRows['roll']?>]" value="absent">A
    </td>
    </tr>
    <?php endwhile ?>
   <td><input type="submit" name="submit"></td>
</table>
</form>