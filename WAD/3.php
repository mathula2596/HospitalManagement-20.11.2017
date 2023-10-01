
<?php
			include "connect.php";
			$i = "select * from patient where id='$_GET[pid]'";

			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
				 echo $tr[1]; 
			}?>	