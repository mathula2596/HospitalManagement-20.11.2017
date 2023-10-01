<?php
include('ses.php');
?>
<html >
<head>
<SCRIPT LANGUAGE="JavaScript">

function Minimize()
{
window.innerWidth = 500;
window.innerHeight = 100;
window.screenX = screen.width;
window.screenY = screen.height;
alwaysLowered = true;
}

function Maximize()
{
window.innerWidth = screen.width;
window.innerHeight = screen.height;
window.screenX = 0;
window.screenY = 0;
alwaysLowered = false;
}
</SCRIPT>
	<style>

/* define a fixed width for the entire menu */
.navigation {
  width: 265px;
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  background-color: #51b8f1;
  text-decoration: none;
  padding: 10px;
  color: #000;
	color: #ffffff;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #000000;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover  .submenu {
  display: block;
  max-height: 300px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color: #f9f9f9;
	color: #000000;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: #000000;
	color: #ffffff;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

	</style>





<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/patient.css" />
<link type="text/css" rel="stylesheet" href="css/style3.css" />

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
ul#c {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color:#51b8f1;
}

li#c {
    float: left;
}

#c li a {
    display: block;
    color:#FFFFFF;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

  #c li a:hover:not(.active) {
    background-color:#000000;
}

#c li a.active {
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

<div class="summary"> <label style="text-align: right">     User Login     : </label>  <?php echo $login_session; ?> <p align="right" style="position: absolute; top: -12px;left: 1298px;">  <font style="font-size:18px;"><a href="out.php">Logout </font></a>
 
</div>
<!--logo file end-->

<!--date and time display-->
<div class="date">
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
<ul id="c">
  <li id="c"> <font style="font-size:16px;"><a href="home.php">Home</a></li>


  <li id="c"><a href="Consultant _ Northern Central Hospital.html">Active Members</a></li></font>

</ul>
</div>

<!--menu end-->


<!--marquee start -->
<div class="menu">
<marquee align="middle" direction="left" behavior="scroll" > <font size="+3"  color="#989898" face="Geneva, Arial, Helvetica, sans-serif"> <b> Always Care For You...... </b></font></marquee>
</div>

<!--marquee end -->
<br />

<br><br>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1; font-size: 42px;" >Welcome To The Dashboard</h1><br><br>

 <div class="side" >


 <nav class="navigation">
  <ul class="mainmenu" >
    <li><a href="#">Patients</a>
    <ul class="submenu">
        <li><a  href="Patient_Registration.php"  onclick="window.open('Patient_Registration.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a  href="View_Patient.php"  onclick="window.open('View_Patient.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a href="Search_Window.php"  onclick="window.open('Search_Window.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a  href="Update_here.php"  onclick="window.open('Update_here.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
      </ul>
      </li>
    <li><a href="#">Appointments</a>
    <ul class="submenu">
        <li><a href="app.php"  onclick="window.open('app.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_app.php"  onclick="window.open('view_app.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a href="appsearch.php"  onclick="window.open('appsearch.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="upapp.php"  onclick="window.open('upapp.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a href="deletesearch.php"  onclick="window.open('deletesearch.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Cancel</a></li>
      </ul>
    </li>
    <li><a href="#">Payments</a>
      <ul class="submenu">
        <li><a href="bill.php"  onclick="window.open('bill.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_pay.php"  onclick="window.open('view_pay.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
                <li><a href="pay_sea.php"  onclick="window.open('pay_sea.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>

     
      </ul>
    </li>
    <li><a href="#">Wards</a>
    <ul class="submenu">
        <li><a href="ward_add.php"  onclick="window.open('ward_add.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_ward.php"  onclick="window.open('view_ward.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a href="ward_se.php"  onclick="window.open('ward_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="ward_up_se.php"  onclick="window.open('ward_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a  href="ward_delete_se.php"  onclick="window.open('ward_delete_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a></li>
       
   
      </ul>
    </li>
     <li><a href="#">Operation Theater</a>
    <ul class="submenu">
         <li><a href="operation.php" onclick="window.open('operation.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_opp.php" onclick="window.open('view_opp.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
 <li><a href="opp_se.php" onclick="window.open('opp_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="opp_up.php" onclick="window.open('opp_up.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a href="opp_del.php" onclick="window.open('opp_del.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a></li>
        
      </ul>
    </li>
    
      <li><a href="#">Patient History</a>
    <ul class="submenu">
                <li><a href="patient_history.php"  onclick="window.open('patient_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_p_history.php"  onclick="window.open('view_p_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a  href="search_hi.php"  onclick="window.open('search_hi.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="up_history.php"  onclick="window.open('up_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
      </ul>
    </li>

  
    
     <li><a href="#">Doctors</a>
    <ul class="submenu">
         <li><a href="DoctorReg.php"  onclick="window.open('DoctorReg.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a  href="view_doctor.php"  onclick="window.open('view_doctor.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a href="doc_se.php"  onclick="window.open('doc_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="doc_up_se.php"  onclick="window.open('doc_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a href="doc_del_se.php"  onclick="window.open('doc_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a></li>
        <li><a href="doc_sche.php"  onclick="window.open('doc_sche.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Schedule</a></li>
            

      </ul>
    </li>

    <li><a href="#">Receptionist</a>
    <ul class="submenu">
         <li><a href="recadd.php"  onclick="window.open('recadd.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li><a href="view_rec.php"  onclick="window.open('view_rec.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a></li>
        <li><a href="re_se.php"  onclick="window.open('re_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="re_up_se.php"  onclick="window.open('re_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a href="rec_del_se.php"  onclick="window.open('rec_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a></li>
        <li><a href="rec_sche.php"  onclick="window.open('rec_sche.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Schedule</a></li>


      </ul>
    </li>
    <li><a href="#">Admin</a>
    <ul class="submenu">
         <li><a href="addadmin.php"  onclick="window.open('addadmin.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a></li>
        <li>    <a href="view_admin.php"  onclick="window.open('view_admin.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
</li>
        <li><a href="ad_se.php"  onclick="window.open('ad_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a></li>
        <li><a href="ad_up_se.php"  onclick="window.open('ad_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a></li>
        <li><a href="ad_del_se.php"  onclick="window.open('ad_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a></li>
       
 

      </ul>
    </li>
  
	 </ul>
</nav>
 </div>

<div class="fullmenu">











														<div class="staff" style="top: 60px; left: 48px;"> <img src="dashboard/10.png" width="150" height="160">  </div>


 <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Patients</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="Patient_Registration.php"  onclick="window.open('Patient_Registration.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;" o> Add</a>
    <a href="View_Patient.php"  onclick="window.open('View_Patient.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a href="Search_Window.php"  onclick="window.open('Search_Window.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
    <a href="Update_here.php"  onclick="window.open('Update_here.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>

  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>















	<div class="staff" style="top: 60px; left: 289px;"><img src="dashboard/27.png" style="left: 150px;"width="170" height="160"></div>

  <div class="dropdown1" style="top: 240px;
	left:306px;">
<button onclick="myFunction1()" class="dropbtn1">Appointments</button>
  <div  id="myDropdown1" class="dropdown-content1" >
    <a href="app.php"  onclick="window.open('app.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
        <a href="view_app.php"  onclick="window.open('view_app.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
        <a href="appsearch.php"  onclick="window.open('appsearch.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
        <a  href="upapp.php"  onclick="window.open('upapp.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
        <a href="deletesearch.php"  onclick="window.open('deletesearch.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Cancel</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show1");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show1')) {
        openDropdown.classList.remove('show1');
      }
    }
  }
}
</script>









	<div class="staff" style="top: 60px; left: 530px;"><img src="dashboard/26.png" width="150" height="150"></div>
  <div class="dropdown2" style="top: 240px;
	left:560px;">
<button onclick="myFunction2()" class="dropbtn2">Payments</button>
  <div id="myDropdown2" class="dropdown-content2">
    <a href="EditableInvoice/index.php"  onclick="window.open('EditableInvoice/index.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_pay.php"  onclick="window.open('view_pay.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    
           <a href="pay_sea.php"  onclick="window.open('pay_sea.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>


  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show2");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {

    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show2')) {
        openDropdown.classList.remove('show2');
      }
    }
  }
}
</script>













	<div class="staff" style="top: 60px; left: 771px;"><img src="dashboard/7.png" width="160" height="160"></div>
  <div class="dropdown3" style="top: 240px;
	left:815px;">
<button onclick="myFunction3()" class="dropbtn3">Wards</button>
  <div id="myDropdown3" class="dropdown-content3">
    <a href="ward_add.php"  onclick="window.open('ward_add.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_ward.php"  onclick="window.open('view_ward.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
     <a href="ward_se.php"  onclick="window.open('ward_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
    <a href="ward_up_se.php"  onclick="window.open('ward_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
     <a href="ward_delete_se.php"  onclick="window.open('ward_delete_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a>
   
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show3");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {

    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show3')) {
        openDropdown.classList.remove('show3');
      }
    }
  }
}
</script>















	<div class="staff" style="top: 377px; left: 48px;"><img src="dashboard/30.png"  width="150" height="150"></div>


  <div class="dropdown4" style="top: 560px; left: 50px;
	">
<button onclick="myFunction4()" class="dropbtn4">Operation Theater</button>
  <div id="myDropdown4" class="dropdown-content4">
    <a href="operation.php" onclick="window.open('operation.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_opp.php" onclick="window.open('view_opp.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a href="opp_se.php" onclick="window.open('opp_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
    <a href="opp_up.php" onclick="window.open('opp_up.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
     <a href="opp_del.php" onclick="window.open('opp_del.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a>
    
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction4() {
    document.getElementById("myDropdown4").classList.toggle("show4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn4')) {

    var dropdowns = document.getElementsByClassName("dropdown-content4");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show4')) {
        openDropdown.classList.remove('show4');
      }
    }
  }
}
</script>












	<div class="staff" style="top: 377px; left: 289px;"><img src="dashboard/33.png"  width="150" height="150"></div>

  <div class="dropdown5" style="top: 560px;
	left:310px;">
<button onclick="myFunction5()" class="dropbtn5">Patient History</button>
  <div id="myDropdown5" class="dropdown-content5">
   <a href="patient_history.php"  onclick="window.open('patient_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
 
    <a href="view_p_history.php"  onclick="window.open('view_p_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a  href="search_hi.php"  onclick="window.open('search_hi.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
     <a href="up_history.php"  onclick="window.open('up_history.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction5() {
    document.getElementById("myDropdown5").classList.toggle("show5");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn5')) {

    var dropdowns = document.getElementsByClassName("dropdown-content5");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show5')) {
        openDropdown.classList.remove('show5');
      }
    }
  }
}
</script>

















	<div class="staff" style="top: 377px; left: 530px;"><img src="dashboard/12.png"  width="150" height="150"></div>

  <div class="dropdown6" style="top: 560px;
	left:565px;">
<button onclick="myFunction6()" class="dropbtn6">Doctors</button>
  <div id="myDropdown6" class="dropdown-content6">
    <a href="DoctorReg.php"  onclick="window.open('DoctorReg.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_doctor.php"  onclick="window.open('view_doctor.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a href="doc_se.php"  onclick="window.open('doc_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
     <a href="doc_up_se.php"  onclick="window.open('doc_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
      <a href="doc_del_se.php"  onclick="window.open('doc_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a>
       <a href="doc_sche.php"  onclick="window.open('doc_sche.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Schedule</a>

  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction6() {
    document.getElementById("myDropdown6").classList.toggle("show6");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn6')) {

    var dropdowns = document.getElementsByClassName("dropdown-content6");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show6')) {
        openDropdown.classList.remove('show6');
      }
    }
  }
}
</script>



















  <div class="staff" style="top: 377px; left: 771px;"><img src="dashboard/35.png"  width="150" height="150"></div>

	<div class="dropdown7" style="top: 560px;
	left:785px;">
<button onclick="myFunction7()" class="dropbtn7">Receptionist</button>
  <div id="myDropdown7" class="dropdown-content7">

     <a href="recadd.php"  onclick="window.open('recadd.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_rec.php"  onclick="window.open('view_rec.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a href="re_se.php"  onclick="window.open('re_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
     <a href="re_up_se.php"  onclick="window.open('re_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
      <a href="rec_del_se.php"  onclick="window.open('rec_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a>
       <a href="rec_sche.php"  onclick="window.open('rec_sche.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Schedule</a>


  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction7() {
    document.getElementById("myDropdown7").classList.toggle("show7");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn7')) {

    var dropdowns = document.getElementsByClassName("dropdown-content7");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show7')) {
        openDropdown.classList.remove('show7');
      }
    }
  }
}
</script>














<div class="staff" style="top: 694px; left: 48px;"><img src="dashboard/36.png"  width="150" height="175"></div>

  <div class="dropdown8" style="top: 880px; left: 90px;
	">
<button onclick="myFunction8()" class="dropbtn8">Admin</button>
  <div id="myDropdown8" class="dropdown-content8">

    <a href="addadmin.php"  onclick="window.open('addadmin.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Add</a>
    <a href="view_admin.php"  onclick="window.open('view_admin.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">View</a>
    <a href="ad_se.php"  onclick="window.open('ad_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Search</a>
     <a href="ad_up_se.php"  onclick="window.open('ad_up_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Update</a>
      <a href="ad_del_se.php"  onclick="window.open('ad_del_se.php', 'newwindow',  ' width=1070, height=640','resizable=no' ); return false;">Delete</a>
       
    

  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction8() {
    document.getElementById("myDropdown8").classList.toggle("show8");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn8')) {

    var dropdowns = document.getElementsByClassName("dropdown-content8");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show8')) {
        openDropdown.classList.remove('show8');
      }
    }
  }
}
</script>











<!--   <div class="staff" style="top: 694px; left: 289px;"><img src="dashboard/34.png"  width="165" height="165"></div>

  <div class="dropdown9" style="top: 880px;
	left:315px;">
  <button onclick="myFunction9()" class="dropbtn9">Waiting List</button>
  <div id="myDropdown9" class="dropdown-content9">
<a href="">Check Up</a>
       <a href="">X-Ray/Scan</a>
        <a href="">Operating Theater</a>
    


 </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction9() {
    document.getElementById("myDropdown9").classList.toggle("show9");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn9')) {

    var dropdowns = document.getElementsByClassName("dropdown-content9");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show9')) {
        openDropdown.classList.remove('show9');
      }
    }
  }
}
</script>







 <div class="staff" style="top: 694px; left: 530px;"><img src="dashboard/33.png"  width="150" height="150"></div>

  <div class="dropdown10" style="top: 880px;
	left:550px;">
<button onclick="myFunction10()" class="dropbtn10">A</button>
  <div id="myDropdown10" class="dropdown-content10">
    <a href="">Add</a>
 
    <a href="">View</a>
    <a href="">Search</a>
     <a href="">Update</a>
   
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction10() {
    document.getElementById("myDropdown10").classList.toggle("show10");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn10')) {

    var dropdowns = document.getElementsByClassName("dropdown-content10");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show10')) {
        openDropdown.classList.remove('show10');
      }
    }
  }
}
</script>








  <div class="staff" style="top: 694px; left: 771px;"></div>

  <div class="dropdown11" style="top: 880px;
	left:809px;">
<button onclick="window.open('Patient_Registration.php', 'newwindow',  ' width=1000, height=640','resizable=no' ); return false;" class="dropbtn9" class="dropbtn11">Doctor</button>
  <div id="myDropdown11" class="dropdown-content11">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction11() {
    document.getElementById("myDropdown11").classList.toggle("show11");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn11')) {

    var dropdowns = document.getElementsByClassName("dropdown-content11");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show11')) {
        openDropdown.classList.remove('show11');
      }
    }
  }
}
</script>-->









 <!-- <div class="staff" style="top: 977px; left: 48px;"></div>

  <div class="dropdown12" style="top: 1160px;
	">
<button onclick="myFunction12()" class="dropbtn12">Click Me</button>
  <div id="myDropdown12" class="dropdown-content12">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction12() {
    document.getElementById("myDropdown12").classList.toggle("show12");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn12')) {

    var dropdowns = document.getElementsByClassName("dropdown-content12");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show12')) {
        openDropdown.classList.remove('show12');
      }
    }
  }
}
</script>-->



</div>










</body>
</html>
