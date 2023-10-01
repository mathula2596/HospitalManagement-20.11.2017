


      <?php



			// $id=$_POST['A_ID'];
        include("connect.php");
        $i = mysql_query("delete from admin where ID='".$_GET[id]."'");
        $j = mysql_query("delete from login where ID='".$_GET[id]."'");

if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=ad_del_se.php">';
        }

    ?>
