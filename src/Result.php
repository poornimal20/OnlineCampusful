<?php
include('Proheader.php');
?>
<?php
session_start();

?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<form action="Result.php" name="Result_form"  id="Result_form"  method="post">
	
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="White" class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2"> Result Details</th>
		<br>
	</tr>
	<tr>
		<td class="col">User Name:</td>
		<td><input type="text" name="U_name"  value="" /></td>
	</tr>

	<tr>
		<td class="col">Join Date:</td>
		<td><input type="text" name="Jdate" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col">Location:</td>
		<td><input type="text" name="Loca" value="" class="required email"  /></td>


	</tr>
		
	<tr>
		<td class="col">Result:</td>
		<td><input type="text" name="Result" value="" class="required"  /></td>
	</tr>
	<tr>
		<td class="col">Company Name</td>
		<td><input type="text" name="Cname" value="<?php echo $_SESSION['loggedIn'];?>" class="required" /></td>
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


<br>

</center>
	</form>
</div>


<?php
 include_once("config/config.php");  
 if(isset($_POST['register'])){
	 if($_POST['U_name']=="" || $_POST['Jdate']=="" || $_POST['Loca']=="" || $_POST['Result']=="" || $_POST['Cname']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `result` (`Uname`, `Jdate`, `Location`, `Result`, `Cname`)"; 		
	$query .= " VALUES ('".$_POST['U_name']."', '".$_POST['Jdate']."', '".$_POST['Loca']."', '".$_POST['Result']."', '";
	$query .=  $_POST['Cname']."')";

        echo '<script> alert("PREGISTERD SUCCESSFULLY");</script>';
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
 

