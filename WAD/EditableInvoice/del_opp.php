
 

      <?php 



			// $id=$_POST['A_ID'];        
        include("connect.php");
        $i = mysql_query("delete from theater where o_no='".$_GET[o_no]."'");
if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=opp_del.php">';
        }
      
    ?>


	