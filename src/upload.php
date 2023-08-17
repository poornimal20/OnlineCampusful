<?php
error_reporting(0);
include_once("config/config.php");
//STAFFIN();
$page = 'upload.php';
include_once("Userheader.php");
if(isset($_GET['Sno'])){
	$id = $_GET['Sno'];
	$query = "select * from jobapply where Sno='".$id."'";
	$res = mysql_query($query);
	$row = mysql_fetch_assoc($res);
	$tut_name = $row['Sno']; 
	$class =$row['Cname'];
	$ad =$row['Applydate'];
	$file =$row['upload_path'];

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
<form action="upload_process.php" method="post" id="form_task" name="form_task"  enctype="multipart/form-data" >
<div align=center>
<center>
<table border="0" cellspacing="5" class="form_container" align="center">
	<caption >
	<?php echo $_SESSION['msg'];$_SESSION['msg']='';?>
	
	</caption>
	<tr>
		<th colspan="2"><h3>UPLOAD RESUME</h3></th>
	</tr>
	<tr>
		<td width="43%" class="col">Sno</td>
		<td width="57%"><input type="text" name="Seno"  value="<?php echo $tut_name;?>" /></td>
	</tr>
	<tr>
		<td width="43%" class="col">Company Name</td>
		<td width="57%"><input type="text" name="C_name"  value="<?php echo $class;?>" /></td>
	</tr>
	<tr>
		<td width="43%" class="col">Apply Date</td>
		<td width="57%"><input type="text" name="Adate"  value="<?php echo date("d/m/y"); ?>" /></td>
	</tr>
	<tr>
		<td class="col">Upload File</td>
		<td><INPUT TYPE="FILE" NAME="fileToUpload"  ><br /><br />

			<?php // echo $file ; ?>
		</td>
	</tr>
	<tr>
	<td>
	User Name
	</td>
	<td>
	<input type="text" name="email_id"  Value="<?php echo $_SESSION['loggedIn'];?>" readonly/></td>
		
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
	include_once("footer.php");
?>
