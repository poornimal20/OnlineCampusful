<?php
include_once("config/config.php");
//STAFFIN();
$page = 'Interview.php';
include_once("Proheader.php");
if(isset($_GET['U_name'])){
	$id = $_GET['U_name'];
	$query = "select * from jobapply where U_name='".$id."'";
	$res = mysql_query($query);
	$row = mysql_fetch_assoc($res);
	$tut_name = $row['U_name']; 


}


if(isset($_GET['Sno'])){
	$id1 = $_GET['Sno'];
	$query1 = "select * from jobdetails where Sno='".$id1."'";
	$res1 = mysql_query($query1);
	$row1 = mysql_fetch_assoc($res1);
	$tut_name1 = $row1['Sno']; 
	$class1 =$row1['Cuname'];
	//$ad1 =$row1['Applydate'];
	//$file1 =$row1['upload_path'];

}
 	
else{
	$id ='';
	$tut_name = '';
	$class  = '';
	$file = '';
}

?>
<script type="text/javascript">	
  $(document).ready(function(){
    $("#form_task").validate();
  });
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y",
			selectedDate:{		
				day:5,		
				month:2,
				year:2012
			},
			yearsRange:[1980,2000],
			limitToToday:false,
			dateFormat:"%d-%m-%Y",
		});
		
	};
</script>

<?php
//session_start();

?>
<form action="Interview.php" method="post" id="form_task" name="form_task"  enctype="multipart/form-data" >
<div align=center>
<center>
<table border="0" cellspacing="5" class="form_container">
	<caption >
	<?php echo $_SESSION['msg'];$_SESSION['msg']='';?>
	
	</caption>
	<tr>
		<th colspan="2"><h3>Placed Student Details</h3></th>
	</tr>
	<tr>
		<td width="43%" class="col">Student Name</td>
		<td width="57%"><input type="text" name="txtuname"  value="" /></td>
	</tr>
	<tr>
		<td width="43%" class="col">Company Name</td>
		<td width="57%"><input type="text" name="C_name"  value="" /></td>
	</tr>
	<tr>
		<td width="43%" class="col">College</td>
		<td width="57%"><input type="text" name="Idate"  value="" /></td>
	</tr>
	<tr>
		<td class="col">Location</td>
		<td width="57%"><input type="text" name="Loc"  value="" /></td>
	</tr>
	<tr>
		<td class="col">Department</td>
		<td width="57%"><input type="text" name="Conta"  value="" /></td>
	</tr>

	<tr>
		<th colspan="2">
			<?php if($id != ''){ ?>
			<input type="hidden" value="<?php echo $id;?>" name="id">
			<input type="submit" value="Update" name="update">
			<input type="reset" value="Cancel" onclick="window.location.href='view_user.php';">

			<?php } else{?>
			<input type="submit" value="Submit" name="submit">
			<input type="reset" value="Reset" name="reset">
			<?php } ?>
		</th>
	</tr>
</table>
</center>
</div>

</form>

<?php
 include_once("config/config.php");  
 if(isset($_POST['submit'])){
	 if($_POST['txtuname']=="" || $_POST['C_name']=="" || $_POST['Idate']=="" || $_POST['Loc']=="" || $_POST['Conta']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `interview` (`Sname`, `Cname`, `Colle`, `Location`, `Dept`)"; 		
	$query .= " VALUES ('".$_POST['txtuname']."', '".$_POST['C_name']."', '".$_POST['Idate']."', '".$_POST['Loc']."', '".$_POST['Conta']."')";
	//$query .=  '");
	
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	//header("location:Interview.php");
	exit;
 }
 }

?>
<?php
	include_once("footer.php");
?>
