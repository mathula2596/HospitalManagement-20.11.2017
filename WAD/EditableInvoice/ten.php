

<?php
include "connect.php";
$records = mysql_query("SELECT `F_Name` from `$patient` WHERE id = $id");
while ($row = mysql_fetch_array($records)) {
     echo "f_name: F_Name ";
}
?>