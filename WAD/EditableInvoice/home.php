<?php
include('login_here4.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: dash.php");
}
?>
<!DOCTYPE html>
<html >
<head>


<script type="text/javascript" src="js/jquery-1.11.0.min.js">document.forms["myForm"].reset();</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style2.css" />

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

<!--slider start-->
<style>
.mySlides {display:none;}
</style>

<!--slider end-->

<title>Health Care Hospital System</title>
<!--css file-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>


<body alink="#51b8f1" vlink="#A0A0A4">

<!--logo file-->
<div class="header"> 
<img src="Images/looo.png">
<div class="summary"> <table > <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right"> hjhhj




 </td></tr></table>
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
<ul>
  <li> <font style="font-size:16px;"><a href="home.php">Home</a></li>
  

  <li><a href="Untitled-7.html">Active Members</a></li></font>
   
</ul>
</div>

<!--menu end-->


<!--marquee start -->
<div class="menu">
<marquee align="middle" direction="left" behavior="scroll" > <font size="+3"  color="#989898" face="Geneva, Arial, Helvetica, sans-serif"> <b> Always Care For You...... </b></font></marquee> 
</div>
</div>
<!--marquee end -->
<br />



<!--slider start -->
<div class="slider">

<br><br>

  <img class="mySlides"  src="slider/Untitled-10.jpg" style="width:100%">
  <img class="mySlides" src="slider/Untitled-11.jpg" style="width:100%">
  <img class="mySlides" src="slider/Untitled-13.jpg" style="width:100%">
  <img class="mySlides" src="slider/Untitled-12.jpg" style="width:100%">
    <img class="mySlides" src="slider/Untitled-1.jpg" style="width:100%">
      


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 3 seconds
}
</script>

<!--slider end --> 



<!--login start -->
</div>

<div class="login"> 
<img src="Images/login.jpg" id="modal_trigger" href="#modal" style=" width: auto; height: auto; margin: auto;" >

<!--login end --> 
<!--login button start -->
<p align="center" style="padding-left:155px;" >



  <div id="modal" class="popupContainer" style="display:none; ">
		<header class="popupHeader">
			<span class="header_title">Login Here</span>
			<span class="modal_close"><i class="fa fa-times" style="color:#A0A0A4;">X</i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			
				
				<div class="action_btns"> 
					<div class="one_half"><a id="login_form" ></a></div>
					
				</div>
			

			<!-- Username & Password Login form -->
			<div class="user_login" >
				<form action="login_here4.php" method="post">
              
				

                
					<label>Username</label>
					<input type="text" name="username"  required />
					<br />

					<label>Password</label>
					<input type="password" name="password"  required  />
					<br />

				
       
						<br>
						<div class="one_half" style="float:inherit;"><input type="submit"  value="Login" class="btn btn_red" name="log" style="  width:130px; border:hidden; "></div>
						<span><?php echo $error; ?></span></form>
					</div>
				

				
			</div>

			
		</section>
</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").show(function(){
			
			$(".user_login").show();
			return false;
		});

		

	})
</script>


</div>
<!--login button end -->
</body>
</html>

