<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $Complete_name = $_POST['Complete_name'];
 $Nickname = $_POST['Nickname'];
 $Email_Address = $_POST['Email_Address'];
 $Home_Address = $_POST['Home_Address'];
 $Gender = $_POST['Gender'];
 $Cellphone = $_POST['Cellphone'];
 $Comments = $_POST['Comments'];
 // variables for input data

 // sql query for inserting data into database
 $sqli_query = "INSERT INTO users(Complete_name,Nickname,Email_Address,Home_Address,Gender,Cellphone,Comments) VALUES('$Complete_name','$Nickname','$Email_Address','$Home_Address','$Gender','$Cellphone','$Comments')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sqli_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql </label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="Complete_name" placeholder="Full name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email_Address" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_Address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Gender" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Cellphone" placeholder="Cellphone" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Comments" placeholder="Comments: optional" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>