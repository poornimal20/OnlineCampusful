<?php
include('Userheader.php');
?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<form action="register.php" name="register_form"  id="register_form"  method="post">
	
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="White" class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2"> Student Entry</th>
		<br>
	</tr>
	<tr>
		<td class="col">University Name:</td>
		<td><input type="text" name="p1"  value="" /></td>
	</tr>

	<tr>
		<td class="col">Roll No:</td>
		<td><input type="text" name="p2" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col">First Name:</td>
		<td><input type="text" name="p3" value="" class="required"  /></td>


	</tr>
	<tr>
		<td class="col">Last Name:</td>
		<td><input type="text" name="p4" value="" class="required" /></td>
	</tr>
	
	<tr>
		<td class="col">Mobile Number:</td>
		<td><input type="text" name="p5" value="" class="required"  /></td>
	</tr>
	<tr>
		<td class="col">Email ID:</td>
		<td><input type="text" name="p6" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col"  >Date of Birth:</td>
		<td><input type="text" class="required" name="p7" value="" /></td>
	</tr>
	<tr>
		<td class="col"  >Address:</td>
		<td><input type="text" class="required" name="p8" value="" /></td>
	</tr>
		<tr>
		<td class="col">10th CGPA:</td>
		<td><input type="text" name="p15" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col"  >12th CGPA:</td>
		<td><input type="text" class="required" name="p19" value="" /></td>
	</tr>
	
	<tr>
	
		<td class="col"  >UG CGPA:</td>
		<td><input type="text" class="required" name="p23" value="" /></td>
	</tr>

	<tr>
		<td class="col"  >Year of Passing:</td>
		<td><input type="text" class="required" name="p26" value="" /></td>
	</tr>
<tr>
		<td class="col">Specialization:</td>
		<td><input type="text" class="required" name="p27" value="" /></td>
	</tr>
<tr>
	
		<td class="col"  >PG CGPA:</td>
		<td><input type="text" class="required" name="p28" value="" /></td>
	</tr>
	<tr>
		<td class="col"  >Year of Passing:</td>
		<td><input type="text" class="required" name="p31" value="" /></td>
	</tr>
<tr>
		<td class="col">Specialization:</td>
		<td><input type="text" class="required" name="p32" value="" /></td>
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
	 if($_POST['p1']=="" || $_POST['p2']=="" || $_POST['p3']=="" || $_POST['p4']=="" || $_POST['p5']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
if ($_POST['p28']=="")
	$pg=0;
else
	$pg=$_POST['p28'];

	$query = "INSERT INTO `student` VALUES ('".$_POST['p1']."', '".$_POST['p2']."', '".$_POST['p3']."', '".$_POST['p4']."', '".$_POST['p5']."', '".$_POST['p6']."', '".$_POST['p7']."', '".$_POST['p8']."', ".$_POST['p15'].", ".$_POST['p19'].", ".$_POST['p23'].", '".$_POST['p26']."', '".$_POST['p27']."',".$pg.",'".$_POST['p31']."', '".$_POST['p32']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
	//echo $query;exit;
   
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
 

