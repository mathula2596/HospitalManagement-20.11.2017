


      <?php



			// $id=$_POST['A_ID'];
        include("connect.php");
        $i = mysql_query("delete from receiptionist where ID='".$_GET[id]."'");
        $j = mysql_query("delete from login where ID='".$_GET[id]."'");


if($i==true && $j=true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=rec_del_se.php">';
        }

    ?>
