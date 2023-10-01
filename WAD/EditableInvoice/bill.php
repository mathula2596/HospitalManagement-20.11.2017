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

<div class="summary"> <table > <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right"><?php echo $login_session; ?> <td></td><td></td><td align="right"> <font style="font-size:18px;"><a href="JavaScript:window.close()">Close </a> </font>
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


<!--menu bar-->
<div class="menu_group"> 
<br>
<div class="menu_items"> 

</div>

<!--menu end-->


<!--marquee start -->


<!--marquee end -->




<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->




<table style="position: absolute; left: 370px; top: 130px; ">
<form action="" name="myform" method="post" enctype="multipart/form-data">

<tr>
	<td colspan="2"><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;"> Billing System</h1><br></td>
	
	
</tr>
<tr>

<td><label> Invoice No : </label></td>
<td><input type="text" name="inv" size="30"  value=" " readonly / ></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Patient ID : </label></td>
<td><input type="text" name="id" size="30" placeholder="Enter the first name" required  / ></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Patient Name :</label></td>
<td><input type="text" name="name" size="30"  required/></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Description : </label></td>
<td><textarea rows="4" cols="20" name="des" required > </textarea></td></tr>
<tr>

</tr><tr></tr>



<tr>
<td><label> Amount : </label></td>
<td><input type="number" min="0.00" max="10000.00" step="0.01" /></td></tr>

<tr></tr><tr></tr>


<tr>
<td><label> Total : </label></td>
<td><input type="number" min="0.00" max="10000.00" step="0.01" /></td></tr>

<tr></tr><tr></tr>

<tr>
<td>

<label> Cash : </label></td>
<td><input type="number" min="0.00" max="10000.00" step="0.01" /></td></tr>

<tr></tr><tr></tr><tr></tr>



<tr><td>
<label> Balance : </label></td>
<td><input type="number" min="0.00" max="10000.00" step="0.01" /></td></tr>

<tr></tr><tr></tr><tr></tr>

<tr>
<td align="right"><input type="submit" name="submit" value="Print"   onclick="window.open('EditableInvoice/index.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false; "/></td>

<td><input type="reset" name="reset" value="Reset" /></td></tr>
</form>
</table>

 








</body>
</html>
