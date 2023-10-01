<?php
include('ses.php');
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title> Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
<form action="" method="post">
	<div id="page-wrap">

		<textarea id="header" cols="5" readonly>INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address" readonly>Health Care Hospital
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</textarea>
            <img id="image" src="../Images/looo.png" alt="logo" height="50" width="350" style="position: absolute; top: 200;" />

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <label>Cashier ID </label><input type="text" id="customer-title" name="cid" style="position: absolute; left: 320px;" size="10" value="<?php echo $login_session; ?>" readonly> <br><br>
             <label>Patient ID </label>           <input type="text" name="pid" id="customer-title" style="position: absolute; left: 320px;" size="10" value="P-">


            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice </td>
                     <?php
	
					include ("connect.php");
				$t = mysql_query("select ID 
					from payment
					order by ID desc
					limit 1");
			while($id=mysql_fetch_array($t))
			{
			$b=$id["ID"];
		
			$y=substr($b,0);
			$z=$y+1;
			
			}
					
		
					{
						
				?>
                    <td><textarea name="ID" readonly><?php echo $z; ?></textarea></td>
                </tr>
                <?php
				}
					?>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name="date" readonly>auto date</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><textarea class="due" name="tot" readonly>Enter total</textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      
		  </tr>
		  
		  <tr class="item-row">

		   
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$0.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value" ><div id="total">$0.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$0.00</div></td>
		  </tr>
		
		</table>
		<div id="terms">
		  
		  <textarea readonly>Get Well Soon Guys!!!.........</textarea>
		  
	<input type="submit" name="submit" value="Submit">
	<SCRIPT LANGUAGE="JavaScript">
if (window.print) {
document.write('<form><input type=button name=print value="Print invoice" onClick="javascript:window.print()"></form>');
}
</script>
	
</form>
	  </div>
	
	</div>
	
</body>

</html>
<?php
 if(isset($_POST['submit'])){
       
        include "connect.php";
        $i = mysql_query("insert into payment values('".$_POST['ID']."','".trim($_POST['cid'])."','".trim($_POST['pid'])."','".trim($_POST['tot'])."','".trim($_POST['date'])."')");
        if($i==true){
			   echo '<script language="javascript">';
		    echo 'alert("Successfully Added...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
       
        }
?>