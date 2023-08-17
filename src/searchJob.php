<?php
 include_once("config/config.php");  



 include("Userheader.php"); 

?>



<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<div id="right_navi" align="center">
	<br />
	<form action="" name="register_form"  id="register_form"  method="post">
	
	<table border="0"   class="displaycontent"  width="500">

	<tr>
		<th colspan="2">Search Here</th>
	<tr>
	<tr>
		<td class="col">Enter Job Name Here:</td>
		<td><input type="text" name="txt1" class="required" value="" /></td>
	</tr>

	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Search" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>
	</table>
	</form>
	<form action="searchdes.php" name="contactform" class="row" method="post">
	<?php
	 if(isset($_POST['register'])){

	echo '<h2> Job Details </h2>
	<center >
	<table border="2" cellspacing="2" class="displaycontent" width="600" style="border:10px solid gray;">
	<tr>
			 <th bgcolor= gray><font color=white size=2>Sno</font></th>
			   <th bgcolor= gray><font color=white size=2>College Name </font></th>
			      <th bgcolor= gray><font color=white size=2>Company Name </font></th>
		   <th bgcolor= gray><font color=white size=2>Job Name </font></th>
			<th bgcolor= gray><font color=white size=2>Job Description</font></th>
			<th bgcolor= gray><font color=white size=2>Experience</font></th>
      	<th bgcolor= gray><font color=white size=2>Vacancies</font></th>
			<th bgcolor= gray><font color=white size=2>LastDate</font></th>
				<th bgcolor= gray><font color=white size=2>Venue</font></th>
	</tr>';
	

	
	
 

  	mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("placement")  or die(mysql_error());
	$query = "select * from jobdetails where Jobname LIKE '%".$_POST['txt1']."%'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	  ?>
	

	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sno']; ?></font></td>	
       
	
		
		<td bgcolor=white><font color=#000000 size=2><a href ="upload.php?Sno=<?php echo $row['Sno']; ?>&Cuname=<?php echo $row['Cuname'];?>"><?php echo $row['Cuname']; ?></a></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Comname']; ?></font></td>	
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Jobname']; ?></font></td>	
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['JobDesc']; ?></font></td>	
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Experience']; ?></font></td>	
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Vacancies']; ?></font></td>	
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['LastDate']; ?></font></td>	
	<td bgcolor=white><font color=#000000 size=2><?php echo $row['Venue']; ?></font></td>	
		
        
	</tr>
	<?php } }?>
	
	</table>
</form>

</div>
</div>
<?php include("footer.php");?>
