<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
 $sql_query = "UPDATE users SET Complete_name='$Complete_name',Nickname='$Nickname',Email_Address='$Email_Address',Home_Address='$Home_Address',Gender='$Gender',Cellphone='$Cellphone',Comments='$Comments' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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
    <label>CRUD Operations With PHP and MySql</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="Complete_name" placeholder="Full name" value="<?php echo $fetched_row['Complete_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nickname" placeholder="Nickname" value="<?php echo $fetched_row['Nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email_Address" placeholder="Email Address" value="<?php echo $fetched_row['Email_Address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_Address" placeholder="Home Address" value="<?php echo $fetched_row['Home_Address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Gender" placeholder="Gender" value="<?php echo $fetched_row['Gender']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Cellphone" placeholder="Cellphone" value="<?php echo $fetched_row['Cellphone']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Comments" placeholder="Comments: optional" value="<?php echo $fetched_row['Comments']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>