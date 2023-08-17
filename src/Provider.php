<?php
include('header.php');
?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<form action="Provider.php" name="Provider_form"  id="Provider_form"  method="post">
	
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="White" class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2"> Student Registration</th>
		<br>
	</tr>
	<tr>
		<td class="col">Student Name:</td>
		<td><input type="text" name="first_name"  value="" /></td>
	</tr>

	
	<tr>
		<td class="col">Password:</td>
		<td><input type="password" name="password" value="" class="required" /></td>
	</tr>
	
	<tr>
		<td class="col">Confirm Password:</td>
		<td><input type="password" name="Cpassword" value="" class="required" /></td>
	</tr>
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>

<center>
<img src="images/url.jpg">

<br>
&nbsp;&nbsp;&nbsp<a href="login.php">BACK</a>
</center>
	</form>
</div>


<?php
 include_once("config/config.php");  
 if(isset($_POST['register'])){
	 if($_POST['first_name']=="" || $_POST['password']=="" || $_POST['Cpassword']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `studregister` (`Sname`, `Password`, `Cpassword`)"; 		
	$query .= " VALUES ('".$_POST['first_name']."', '".$_POST['password']."', '".$_POST['Cpassword']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	//header("location:register.php");
	exit;
 }
 }

?>

<?php
include('footer.php');
?>
 

