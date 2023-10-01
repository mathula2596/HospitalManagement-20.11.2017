	
<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/patient.css" />
	<?php
	
		$text = $_POST['id'];
		//$text1 = $_POST['date1'];
	
		include("connect.php");
			$id = mysql_query("SELECT * FROM doctor_sch WHERE ID='$text'");
	
		while($di=mysql_fetch_array($id))
		{
	
?>
 
<table align="center"  >
<form action="" name="myform" method="post" enctype="multipart/form-data">

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
		
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[1]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[3]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[5]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[7]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[9]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[11]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[13]; ?></td>
		
		
	</tr>
	<tr>
		<td align="right"> OUT : </td>
		
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[2]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"><?php echo $di[4]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"><?php echo $di[6]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[8]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[10]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"><?php echo $di[12]; ?></td>
		<td class="bod" style="text-align: center; width:65px;"> <?php echo $di[14]; ?></td>
		
	</tr>
	
		 </form>

	
</table>

<br>
 <br>


 
</body>
</html>

  
			
          
            <?php
 }
           
?>