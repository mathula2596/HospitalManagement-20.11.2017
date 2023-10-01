<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $firstname, $lastname, $cno,$dob,$age,$address,$gen,$date,$reason, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>




<div>
<table style="position: absolute; left: 370px; top: 130px; ">
<form action="" name="myform" method="post" enctype="multipart/form-data">

<tr>
	<td colspan="2"><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;"> Patient Registeration</h1><br></td>
	
	
</tr>
<tr>

<td><label> Patient ID : </label></td>
<td><input type="text" name="id" size="30"  value="<?php echo $id; ?>" readonly / ></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> First Name : </label></td>
<td><input type="text" name="f_name" size="30" placeholder="Enter the first name"  value="<?php echo $firstname; ?>"  / ></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Last Name :</label></td>
<td><input type="text" name="l_name" size="30" placeholder="Enter the last name" value="<?php echo $lastname; ?>" /></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Contact Number : </label></td>
<td><input type="NUMBER" name="p_number" size="30" placeholder="Enter the contact number" value="  <?php echo $cno; ?>"/></td></tr>
<tr>

</tr><tr></tr>


<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script>
function setAge(d)
{
  var age = moment().diff(d, 'years');
  $('#age').val(age);
}

$(function() {
  $('.manual').change(function() {
    setAge(moment($(this).val()));
  });
});
</script>
<tr>
<td><label> DOB : </label></td>
<td><input type="date" name="date" size="30" placeholder="Enter the DOB"  class="manual" value="<?php echo $dob; ?>" /></td></tr>

<tr></tr><tr></tr>


<tr>
<td><label> Age : </label></td>
<td><input type="number" name="age" size="30"  id="age" readonly  /></td></tr>

<tr></tr><tr></tr>

<tr>
<td>

<label> Address : </label></td>
<td><textarea rows="4" cols="20" name="address" value=" <?php echo $address; ?>" > </textarea></td></tr>

<tr></tr><tr></tr><tr></tr>

<tr>
<td><label>Gender : </label></td>
<td><input type="radio" name="gender" value="<?php echo $gen; ?>" /> Male

<input type="radio" name="gender" value="<?php echo $gen; ?>" /> Female

<input type="radio" name="gender" value="<?php echo $gen; ?>"/> Other</td></tr>

<tr></tr><tr></tr><tr></tr><tr></tr>


<tr><td>
<label> Date of Admission : </label></td>
<td><input type="date" name="admission" size="30" placeholder="Enter the Date"  value="<?php echo $date; ?>"  /></td></tr>

<tr></tr><tr></tr><tr></tr>

<tr><td>
<label> Reason for Visit : </label></td>
<td><textarea rows="4" cols="20" name="reason" required value="<?php echo $reason; ?>" > </textarea></td></tr>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<td align="center"><input type="submit" name="submit" value="Submit" /></td>


</form>
</table>




</body>

</html>

<?php

}







// connect to the database

include('connect.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$firstname = mysql_real_escape_string(htmlspecialchars($_POST['f_name']));

$lastname = mysql_real_escape_string(htmlspecialchars($_POST['l_name']));

	$cno = mysql_real_escape_string(htmlspecialchars($_POST['p_number']));
	
	$dob = mysql_real_escape_string(htmlspecialchars($_POST['date']));
	
	$age = mysql_real_escape_string(htmlspecialchars($_POST['age']));
	$address = mysql_real_escape_string(htmlspecialchars($_POST['address']));
	$gen = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
	$date = mysql_real_escape_string(htmlspecialchars($_POST['admission']));
	$reason = mysql_real_escape_string(htmlspecialchars($_POST['reason']));



// check that firstname/lastname fields are both filled in

if ($firstname == '' || $lastname == ''|| $cno=='' || $dob==''|| $age==''||$address==''||$gen=='' || $date==''||$reason=='')

{

// generate error message

$error = 'ERROR: Please fill all required fields!';



//error, display form

renderForm($id, $firstname, $lastname, $cno,$dob,$age,$address,$gen,$date,$reason, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE patient SET F_Name='$firstname', L_Name='$lastname',C_N1='$cno',DOB='$dob',Age='$age',Address='$address', Gender='$gen',DOA='$date',Reason='$reason' WHERE ID='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: View_Patient.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error1!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) &&  $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM patient WHERE ID=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db


	$firstname = $row['f_name'];

$lastname = $row['l_name'];

	$cno = $row['p_number'];
	
	$dob = $row['date'];
	
	$age = $row['age'];
	$address = $row['address'];
	$gen = $row['gender'];
	$date = $row['admission'];
	$reason = $row['reason'];




// show form

renderForm($id, $firstname, $lastname,$cno,$dob, $age,$address,$gen,$date,$reason,'');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error2!';

}

}

?>