
 

      <?php 



			// $id=$_POST['A_ID'];        
        include("connect.php");
        $i = mysql_query("delete from appointment where A_ID='".$_GET[A_ID]."'");
if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=deletesearch.php">';
        }
      
    ?>


	