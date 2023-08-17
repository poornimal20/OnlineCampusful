<?php
 include_once("config/config.php");  

 include_once("Adminheader.php"); 
 error_reporting(0);
mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("placement")  or die(mysql_error());
		$query = "select * from tab_user";
		$result = mysql_query($query) or die(mysql_error());
			$result = mysql_query($query) or die(mysql_error());

?>	
<div    align="center">
<form action="Viewuser.php" name="Viewuser" class="row" method="post">
	<h2> User Details </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
			<th bgcolor=Orange><font color=white size=2>Full name</font></th>
			<th bgcolor=Orange><font color=white size=2>User name</font></th>
			<th bgcolor=Orange><font color=white size=2>Email_id </font></th>
			<th bgcolor=Orange><font color=white size=2>Address </font></th>
			<th bgcolor=Orange><font color=white size=2>City</font></th>
			<th bgcolor=Orange><font color=white size=2>State </font></td>
			<th bgcolor=Orange><font color=white size=2>Country</font></th>
        	<th bgcolor=Orange><font color=white size=2>Mobile</font></th>
			
		            
	</tr>

<?php
    while($row=mysql_fetch_array($result))
	{

?>




	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['first_name']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['U_name']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['email_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['address']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['city']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['state']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['country']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['mobile']; ?></font></td>
		
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



