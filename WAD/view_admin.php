<?php
include('ses.php');
?>
<html >
<head>

<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/patient.css" />

<!-- date and time -->
<script type="text/javascript">
    <!--
    function updateTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        if (minutes < 10){
            minutes = "0" + minutes;
        }
        if (seconds < 10){
            seconds = "0" + seconds;
        }
        var v = hours + ":" + minutes + ":" + seconds + " ";
        if(hours > 11){
            v+="PM";
        } else {
            v+="AM"
        }
        setTimeout("updateTime()",1000);
        document.getElementById('time').innerHTML=v;
    }
    updateTime();
    //-->
</script>


<!-- date and time end  -->

<!-- menu -->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color:#51b8f1;
}

li {
    float: left;
}

li a {
    display: block;
    color:#FFFFFF;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:#000000;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
</style>
<!-- menu end-->





<title>Health Care Hospital System</title>


</head>


<body  alink="#51b8f1" vlink="#A0A0A4">

<!--logo file-->
<div class="header">
<img src="Images/looo.png">

<div class="summary"> <label style="text-align: right">     User Login     : </label>  <?php echo $login_session; ?> <p align="right" style="position: absolute; top: -12px;left: 1000px;"><font style="font-size:18px;"><a href="JavaScript:window.close()">Close </a> </font>
 </td></tr></table>
</div>
<!--logo file end-->

<!--date and time display-->
<div style="text-align:center; font-size:20px; font-style:oblique;width:16%; height:45px; margin:auto;   padding-top:5px; padding-bottom:5px; float:right; border-left:solid; border-right:solid; border-color:#51b8f1; color:#989898;">
<b>
<script>
<!-- Begin
var now = new Date();
var days = new Array('Sun','Mon','Tue','Wed','Thurs','Fri','Satur');
var months = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
}
today =  days[now.getDay()] + " " +
         months[now.getMonth()] + " " +
         date + " " +
         (fourdigits(now.getYear())) ;
document.write(today);
//  End -->
</script>

<!--date  display end -->

<!-- time display start-->
<br>
<span id="time"  />
<br>
<br>
</b>

</div>
</div>
<!--date and time display end-->
<br>
<br>

<!--menu bar-->
<div class="menu_group">
<br>
<div class="menu_items">

</div>

<!--menu end-->


<!--marquee start -->


<!--marquee end -->




<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal;  position: absolute; left: 380px; top: 150px; color:#51b8f1;">Admin Details</h1>



<table  align="left" width="100%" style=" border: solid #51b8f1; position: absolute;
top: 242;  " >
<tbody>

    	<tr>
            <th  width= 96 style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;" >Doctor ID</th>
            <th width= "96" style=" border-radius: 5px; text-align: center; width:120px;  background-color:#51b8f1; color: #ffffff;">First Name</th>

            <th width="250" style=" border-radius: 5px; background-color:#51b8f1; width:120px; color: #ffffff; text-align: center; ">Last Name</th>

            <th width="105" style=" border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center;  width:90px;">Contact No</th>
            <th width="100" style="border-radius: 5px;background-color:#51b8f1; color: #ffffff; text-align: center; width:100px;" >DOB</th>
            <th width="80" style="border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center; width:70px; ">Age</th>
            <th width="80" style="border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center;  width:160px;">Address</th>

            <th width="100" style="border-radius: 5px; width:70px; background-color:#51b8f1; color: #ffffff; text-align: center;">Gender</th>
             <th width="100" style="border-radius: 5px; width:200px; background-color:#51b8f1; color: #ffffff; text-align: center;">Email</th>
             <th width="100" style="border-radius: 5px; width:100px; background-color:#51b8f1; color: #ffffff; text-align: center;">Date Join</th>


             <th width="100" style="border-radius: 5px; width:90px; background-color:#51b8f1; color: #ffffff; text-align: center;">Username</th>
             <th width="100" style="border-radius: 5px; width:80px; background-color:#51b8f1; color: #ffffff; text-align: center;">Password</th>
         <th width="100" style="border-radius: 5px; width:50px; background-color:#51b8f1; color: #ffffff; text-align: center;">Edit</th>
                  <th width="100" style="border-radius: 5px; width:50px; background-color:#51b8f1; color: #ffffff; text-align: center;">Delete</th>
	</tr>
        <?php
			include "connect.php";
			$i = "select * from admin";

			$h = mysql_query($i);

			while($tr=mysql_fetch_array($h))
			{


		?>
    <tr></tr><br>
        <tr >
        	<td  class="bod" style="text-align: center; width:55px;"><?php echo $tr[0]; ?></td>
            <td class="bod" style="text-align: center; width:55px; "><?php echo $tr[1]; ?></td>

            <td class="bod" style="text-align: center; width:55px; "><?php echo $tr[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $tr[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $tr[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $tr[5]; ?></td>
            <td class="bod" style="text-align: center;  width:180px;"><?php echo $tr[6]; ?></td>
            <td class="bod" style="text-align: center;  width:180px;"><?php echo $tr[7]; ?></td>
            <td class="bod" style="text-align: center;  width:180px;"><?php echo $tr[8]; ?></td>
            <td class="bod" style="text-align: center;  width:180px;"><?php echo $tr[9]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $tr[10]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $tr[11]; ?></td>




            <td class="bod" style="text-align: center; width:30px; " ><a href="admin_up_fo.php? id=<?php echo $tr[0];?>">Edit</a> </td>

            <td class="bod" style="text-align: center; width:30px; " ><a onclick="javascript:return confirm('Are you sure do you want to delete this?')" href="delete_admin.php? id=<?php echo $tr[0];?>" >Delete</a> </td>
           <?php
        //"update2.php? id=<?php echo $tr[0];

    }?>

		</tbody>
    </table>






</body>
</html>
