<?php   
     $a=$_POST['no'] ;   
	$y=substr($a,1);
			
			
if($a=="X-")
{
        include "connect.php";
        if(isset($_POST['submit'])){
                 
		
   	
        $i = mysql_query("insert into xray values('".$_POST['no']."','".trim($_POST['id'])."','".trim($_POST['did'])."','".trim($_POST['parts'])."','".trim($_POST['date'])."','".trim($_POST['time'])."','".trim($_POST['pay'])."')");
			if($i==true){
			
   echo '<script language="javascript">';
		 echo 'alert("Successfully Added...");';
	  echo '</script>';

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=xray_scan.php">';
        }
        }
			               
     else if($a=="S-")
      {      
		  include "connect.php";
        if(isset($_POST['submit'])){
	$i = mysql_query("insert into scan values('".$_POST['no']."','".trim($_POST['id'])."','".trim($_POST['did'])."','".trim($_POST['parts'])."','".trim($_POST['date'])."','".trim($_POST['time'])."','".trim($_POST['pay'])."')");
			if($i==true){
			
 echo '<script language="javascript">';
		    echo 'alert("Successfully Added...");';
			   echo '</script>';

       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=xray_scan.php">';
        }
     }
   
        
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
}
    
    ?>