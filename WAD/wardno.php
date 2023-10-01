<?php
include("connect.php");

	$query = mysql_query("SELECT bed
FROM ward_no
left  JOIN ward ON ward_no.bed = ward.W_No where ward.W_No is null");
	while ($row=mysql_fetch_array($query))
		{
	if($row==true)
	{
		echo $row[0];
	}
else
{
	echo 'fail';
}}
		
?>
