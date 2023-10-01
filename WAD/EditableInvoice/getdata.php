<?php
include_once"conn.php";

if(!empty($_POST["type_id"]))
{
	$tid=$_POST["type_id"];
	$query = "SELECT * FROM doctor WHERE type_id= $tid ";
$results =	mysqli_query($con,$query);
	
	foreach($results as $type){
		?>
		<option value="<?php echo $type["doctor_ID"];?>"><?php echo $type["first_name"];?></option>
		<?php
	}
}

?>