<?php
include('Proheader.php');
error_reporting(0);
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
<link href="jsDatePick_ltr.min.css" type="text/css" rel="stylesheet"  />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"lastdate",
			dateFormat:"%d-%M-%Y",
			selectedDate:{		
				day:5,		
				month:9,
				year:2014
			    
			},
			yearsRange:[1984,3000],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%d-%m-%Y",
			//imgPath:"img/",
			weekStartDay:1
		});
	};
</script>


<form action="addjob.php" name="addjob"  id="addjob"  method="post" enctype="multipart/form-data">
	
	<table border="0" cellspacing="2"  class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2">Add Company Details</th>
	<tr>
	<tr>
		<td class="col">Company Name</td>
		<td><input type="text" name="txtcname"/></td>
	</tr>
	<tr>
		<td class="col">Job Name</td>
		<td><input type="text" name="txt1"/></td>
	</tr>

	<tr>
		<td class="col">Job Description<font></td>
		<td><textarea name="txt2"> </textarea></td>
	</tr>
	<tr>
		<td class="col">Experience</td>
		<td><input type="text" name="txt3" /></td>
	</tr>
	<tr>
		<td class="col">Vacancies</td>
		<td><input type="text" name="txt4"/></td>
	</tr>
	<tr>
		<td class="col">Interview Date</td>
		<td><input type="text" name="txt5" id="lastdate"/></td>
	</tr>

	<tr>
		<td class="col">Venue</td>
		<td><input type="text" name="txt6" /></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="ADD" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>


<?php
 include_once("config/config.php");  
 if(isset($_POST['register']))
	 {
	 if($_POST['txt1']=="" || $_POST['txt2']=="" || $_POST['txt3']=="" || $_POST['txt4']=="" || $_POST['txt5']==""|| $_POST['txt6']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
		
	$query = "INSERT INTO `jobdetails` (`Cuname`,`Comname`,`jobname`,`jobdesc`,`Experience`,`Vacancies`,`LastDate`,`Venue`)"; 
	$query .= " VALUES ('". $_SESSION['loggedIn']."','".$_POST['txtcname']."','".$_POST['txt1']."', '".$_POST['txt2']."','".$_POST['txt3']."', '".$_POST['txt4']."', '".$_POST['txt5']."','".$_POST['txt6']."')";
	
	//echo $query;

//exit;

	
	if(mysql_query($query))
	{
	// echo $_POST['txt6']="registerd successfully";
	 echo '<script> alert("REGISTERD");</script>';

	}
	else
		{
		 echo '<script> alert("NOT REGISTERD");</script>';
	
	}
	//header("location:addjob.php");
	exit;
 }
 }
	
?>

<?php
include('footer.php');
?>
 

