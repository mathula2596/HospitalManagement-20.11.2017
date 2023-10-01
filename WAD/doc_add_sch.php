




<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<table style="margin:auto;">
<form action="" name="myform" method="post" enctype="multipart/form-data">




</td></tr>
<tr>
<td><label> ID : </label></td>
<td><input type="text" name="id" size="30" placeholder="Enter the Doctor ID" required / ></td>
</tr>


<tr></tr><tr></tr>
</table>
<br>
<br>
<br>
<table align="center">
	<tr><th></th>
		
		<th>Mon</th>
		<th>Tue</th>
		<th>Wed</th>
		<th>Thur</th>
		<th>Fri</th>
		<th>Sat</th>
		<th>Sun</th>
		
	</tr>
	<tr>
		<td align="right"> IN :  </td>
		
		<td> <input type="text" size="10" name="M_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Tu_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="W_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Th_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="F_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Sa_I" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Su_I" placeholder="13:10"></td>
		
		
	</tr>
	<tr>
		<td align="right"> OUT : </td>
		
		<td> <input type="text" size="10" name="M_O" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Tu_O" placeholder="13:10"></td>
		<td> <input type="text" size="10"  name="W_O" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Th_O" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="F_O" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Sa_O" placeholder="13:10"></td>
		<td> <input type="text" size="10" name="Su_O" placeholder="13:10"></td>
		
	</tr>
	
	
	
</table>

<br>
 <br>
 <table align="center">
 	
 	<tr>
 		<td>
 			
 			<input type="submit" name="submit" value="Submit" >
 			
 		</td>
 		<td>
 			
 			<input type="reset" name="reset" value="Reset" >
 			
 		</td>
 		
 	</tr>
 </table>

 
</body>
</html>
<?php   
       
        if(isset($_POST['submit'])){
       
        include "connect.php";
        $i = mysql_query("insert into doctor_sch values('".$_POST['id']."','".trim($_POST['M_I'])."','".trim($_POST['M_O'])."','".trim($_POST['Tu_I'])."','".trim($_POST['Tu_O'])."','".trim($_POST['W_I'])."','".trim($_POST['W_O'])."','".trim($_POST['Th_I'])."','".trim($_POST['Th_O'])."','".trim($_POST['F_I'])."','".trim($_POST['F_O'])."','".trim($_POST['Sa_I'])."','".trim($_POST['Sa_O'])."','".trim($_POST['Su_I'])."','".trim($_POST['Su_O'])."')");
        if($i==true){
			
    echo '<script language="javascript">';
		    echo 'alert("Successfully Added...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doc_add_sch.php">';
        }
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
    
    ?>
