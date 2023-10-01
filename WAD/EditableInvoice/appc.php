<?php
			include "connect.php";
	$search = $_GET[id];
			$i = "select * from patient where id like '".$search."' ";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{?>
			
		<?php
			}>