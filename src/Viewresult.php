<?php
 include_once("config/config.php");  

 include_once("Userheader.php"); 
 error_reporting(0);
mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("jobportal")  or die(mysql_error());
		$query = "select * from result where Uname='".$_SESSION['loggedIn']."'";
		$result = mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
		}	

?>	

<form action="Viewresult.php" name="Viewresult" class="row" method="post">
<div align="center">	
	<center >
<h2> Result Details </h2>
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
			<th bgcolor=Orange><font color=white size=2>ID</font></th>
			<th bgcolor=Orange><font color=white size=2>User name</font></th>
			<th bgcolor=Orange><font color=white size=2>Joining Date </font></th>
			<th bgcolor=Orange><font color=white size=2>Location</font></th>
			<th bgcolor=Orange><font color=white size=2>Result </font></td>
			<th bgcolor=Orange><font color=white size=2>Company Name</font></th>
			
		            
	</tr>
	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>	
       	<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uname']; ?></font></td>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Jdate']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Location']; ?></font></td>
    	   	<td bgcolor=white><font color=#000000 size=2><?php echo $row['Result']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Cname']; ?></font></td>
	
	</tr>
			
	</table>
</div>
</form>
	 
<?php include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>



