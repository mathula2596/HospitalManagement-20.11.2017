
 

      <?php 



			// $id=$_POST['A_ID'];        
        include("connect.php");
        $i = mysql_query("delete from ward where Ad_No='".$_GET[A_id]."'");
if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=ward_delete_se.php">';
        }
      
    ?>


	