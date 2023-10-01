


      <?php



			// $id=$_POST['A_ID'];
        include("connect.php");
        $i = mysql_query("delete from doctor where doctor_ID='".$_GET[D_id]."'");

        $j = mysql_query("delete from login where doctor_ID='".$_GET[D_id]."'");



//  $j = mysql_query("insert into resign_doc values('".$_GET['D_id']."','".$_GET['f_name']."','".$_GET['l_name']."','".$_GET['p_number1']."','".$_GET['date']."','".$_GET['age']."','".$_GET['address']."','".$_GET['gender1']."','".$_GET['mail']."','".$_GET['join']."','".$_GET['type']."','".$_GET['username']."','".$_GET['password']."')");

if($i==true && $j==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doc_del_se.php">';
        }

    ?>
