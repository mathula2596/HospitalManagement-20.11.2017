	
<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/patient.css" />
	<?php
	
		$text = $_POST['id'];
		//$text1 = $_POST['date1'];
	
		include("connect.php");
			$id = mysql_query("SELECT * FROM rec_sch WHERE ID='$text'");
	
		while($di=mysql_fetch_array($id))
		{
	
?>
 
<table align="center"  >
<form action=""  method="post" >

	<tr><th></th>
		
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Mon</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Tue</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Wed</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Thur</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Fri</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Sat</th>
		<th style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;">Sun</th>

	</tr>
	<tr>
		<td align="right"> IN :  </td>
		
		<td class="bod" style="text-align: center; width:65px;"><input type="text" name="M_In" size="10" value="<?php echo $di[1]; ?>"> </td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" name="Tu_In" size="10" value="<?php echo $di[3]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" name="W_In" size="10" value="<?php echo $di[5]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" name="Th_In" size="10" value="<?php echo $di[7]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"><input type="text" name="F_In" size="10" value="<?php echo $di[9]; ?>"> </td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" name="Sa_In" size="10" value="<?php echo $di[11]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" size="10" name="Su_In" value="<?php echo $di[13]; ?>"></td>
		
		
	</tr>
	<tr>
		<td align="right"> OUT : </td>
		
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" size="10" name="M_Ou" value="<?php echo $di[2]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"><input type="text" size="10" name="Tu_Ou" value="<?php echo $di[4]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"><input type="text" name="W_Ou" size="10" value="<?php echo $di[6]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" size="10" name="Th_Ou" value="<?php echo $di[8]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" size="10" name="F_Ou" value="<?php echo $di[10]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"><input type="text" size="10" name="Sa_Ou" value="<?php echo $di[12]; ?>"></td>
		<td class="bod" style="text-align: center; width:65px;"> <input type="text" size="10" name="Su_Ou" value="<?php echo $di[14]; ?>"></td>
				<td class="bod" style="text-align: center; width:65px; display: none;"> <input type="text" size="10" name="id" value="<?php echo $di[0]; ?>"></td>

	</tr>
	
	
		

	
</table>

<br>
 <br>
 <table align="center">
 	
 	<tr>
 		<td>
 			
 			<input type="submit" name="submit" value="submit" >
 			
 		</td>
 		
 		
 	</tr>
	 </form>
 </table>

 
</body>
</html>

  <?php
	
        if(isset($_POST['submit'])){
include "connect.php";

		$i = mysql_query("UPDATE rec_sch SET M_I='".$_POST['M_In']."',M_O='".$_POST['M_Ou']."',Tu_I='".$_POST['Tu_In']."',Tu_O='".$_POST['Tu_Ou']."',W_I='".$_POST['W_In']."',W_O='".$_POST['W_Ou']."',Th_I='".$_POST['Th_In']."',Th_O='".$_POST['Th_Ou']."',F_I='".$_POST['F_In']."',F_O='".$_POST['F_Ou']."',Sa_I='".$_POST['Sa_In']."',Sa_O='".$_POST['Sa_Ou']."',Su_I='".$_POST['Su_In']."',Su_O='".$_POST['Su_Ou']."' WHERE ID='".$_POST['id']."'");

       
			 if($i==true ){
			   echo '<script language="javascript">';
		    echo 'alert("Successfully Updated...");';
			   echo '</script>';

    //    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doc_sche.php">';

			}
			
	}


		}


        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();


    ?>
 

    