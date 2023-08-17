<?php
 include_once("config/config.php");  

 include_once("Userheader.php"); 
 error_reporting(0);
mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("placement")  or die(mysql_error());
		$query = "select * from interview";
		$result = mysql_query($query) or die(mysql_error());
			$result = mysql_query($query) or die(mysql_error());

?>	
<div    align="center">
<form action="Viewuser.php" name="Viewuser" class="row" method="post">
	<h2> User Details </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
			<th bgcolor=Orange><font color=white size=2>ID</font></th>
			<th bgcolor=Orange><font color=white size=2>Student name</font></th>
			<th bgcolor=Orange><font color=white size=2>Company Name </font></th>
			<th bgcolor=Orange><font color=white size=2>College </font></th>
			<th bgcolor=Orange><font color=white size=2>Location</font></th>
			<th bgcolor=Orange><font color=white size=2>Department </font></td>
		
			
		            
	</tr>

<?php
    while($row=mysql_fetch_array($result))
	{

?>




	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Cname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Colle']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Location']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['Dept']; ?></font></td>
	
		
	</tr>
				<?php
		}	

?>	
	</table>
</form>
</div>	 
<?php include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>



