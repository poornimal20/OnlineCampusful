<?php
 include_once("config/config.php");  

 include_once("Userheader.php"); 
 error_reporting(0);
 session_start();
mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("placement")  or die(mysql_error());
		$query = "select * from student where First_name='".$_SESSION['loggedIn']."'";
		$result = mysql_query($query) or die(mysql_error());
			$result = mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_assoc($result))
		{
		$cname[] = $row;
		}
	if(isset($_GET['edit']))
		{
		$id = $_GET['edit'];
		}
	else
		{
		$id = '';
		}
	

$i=1;

?>	
<?php
if(isset($_POST['a1']))
	{
	$query = "UPDATE student set First_Name='".$_POST['a3']."',Last_Name='".$_POST['a4']."',Mobile_Number='".$_POST['a5']."',Email_ID='".$_POST['a6']."',Date_of_birth='".$_POST['a7']."',Address='".$_POST['a8']."',tenth_CGPA='".$_POST['a15']."',twelth_CGPA='".$_POST['a19']."',UG_CGPA='".$_POST['a23']."',Year_of_passing3='".$_POST['a26']."',Specialization1='".$_POST['a27']."',PG_CGPA='".$_POST['a28']."',Year_of_passing='".$_POST['a31']."',Specialization2='".$_POST['a32']."' where University='".$_POST['a1']."' and Roll_no='".$_POST['a2']."'";
	echo $query;
	if(mysql_query($query))
		{
		$_SESSION['message']='<span class="succuess">Record updated successfully</span>';
		header('location:Viewstudent.php');
		}	
	else
		{
		$_SESSION['message']='<span class="fail">Record Not Updated</span>';
		}
	header("location:Viewstudent.php");
	exit;
	}
	?>
						<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from student where Roll_no='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	//	$_SESSION['message']='<span class="succuess">Record Delete succussfully</span>';
		
header("location:Viewuser.php");
	exit;
	}
 
	
?>

<div    align="center">
<form action="Viewstudent.php" name="Viewuser" class="row" method="post">
	<h2> Student Details </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
			<th bgcolor=Orange><font color=white size=2>University</font></th>
			<th bgcolor=Orange><font color=white size=2>Roll No</font></th>
			<th bgcolor=Orange><font color=white size=2>First Name </font></th>
			<th bgcolor=Orange><font color=white size=2>Last Name </font></th>
			<th bgcolor=Orange><font color=white size=2>Mobile Number</font></th>
			<th bgcolor=Orange><font color=white size=2>Email ID </font></td>
			<th bgcolor=Orange><font color=white size=2>Date of Birth </font></th>
			<th bgcolor=Orange><font color=white size=2>Address </font></th>
			<th bgcolor=Orange><font color=white size=2>10th CGPA </font></th>
			<th bgcolor=Orange><font color=white size=2>12th CGPA </font></th>
			<th bgcolor=Orange><font color=white size=2>UG CGPA </font></th>
			<th bgcolor=Orange><font color=white size=2>Year of Passing </font></td>
			<th bgcolor=Orange><font color=white size=2>Specialization </font></th>
			<th bgcolor=Orange><font color=white size=2>PG CGPA </font></th>
			<th bgcolor=Orange><font color=white size=2>Year of Passing </font></td>
			<th bgcolor=Orange><font color=white size=2>Specialization </font></th>
			         
	</tr>
	  <?php
  	  if(count($cname)>0){
	  foreach($cname as $cat){
		if($id == $cat['Roll_no']){
	  ?>
	<tr>
		
		
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['University'];?>" name="a1" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Roll_no'];?>" name="a2" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['First_Name'];?>" name="a3" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Last_Name'];?>" name="a4" class="required" /></font></td>
        <td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Mobile_Number'];?>" name="a5" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Email_ID'];?>" name="a6" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Date_of_birth'];?>" name="a7" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Address'];?>" name="a8" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['tenth_CGPA'];?>" name="a15" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['twelth_CGPA'];?>" name="a19" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['UG_CGPA'];?>" name="a23" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Year_of_passing3'];?>" name="a26" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Specialization1'];?>" name="a27" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['PG_CGPA'];?>" name="a28" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Year_of_passing'];?>" name="a31" class="required" /></font></td>
		<td ><font color=#000000 size=2><input type="text" value="<?php echo $cat['Specialization2'];?>" name="a32" class="required" /></font></td>
		        <td><font color=#000000 size=2><input type="hidden" value="<?php echo $id; ?>"  name="sno"/>
			<input type="submit" value="update" /></font></td>
		<td><font color=#000000 size=2><input type="button" value="cancel" onClick="window.location.href='Viewstudent.php';"/></font></td>
		<td><input type="submit" value="delete" name="delete"/></td>
	</tr>

<?php
		}
else
	{

?>

	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['University']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Roll_no']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['First_Name']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Last_Name']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Mobile_Number']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Email_ID']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Date_of_birth']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Address']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['tenth_CGPA']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['twelth_CGPA']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['UG_CGPA']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Year_of_passing3']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Specialization1']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['PG_CGPA']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Year_of_passing']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $cat['Specialization2']; ?></font></td>
		
		
	</tr>
				<?php
		}
		}
		}
		

?>	
	</table>
</form>
</div>	 
<?php include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>



