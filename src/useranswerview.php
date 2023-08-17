<?php
 include_once("config/config.php");  

 include_once("userheader.php"); 
 
error_reporting(0);
?>


	
<div    align="center">
<form action="admindocter.php" name="contactform" class="row" method="post">
	<h2> ADMIN ANSWER DETAILS: </h2>
	<center >
	<table border="2" cellspacing="2" class="displaycontent" width="300" style="border:10px solid gray;">
	<tr>
	    
		   <th bgcolor= gray><font color=white size=2>Name </font></th>
		<th bgcolor=gray><font color=white size=2>User Name</font></td>
		<th bgcolor=gray><font color=white size=2>Question</font></th>
		<th bgcolor=gray><font color=white size=2>Answer</font></th>
       
	
		
		
       
      
	</tr>
	<?php
  	mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("Placement")  or die(mysql_error());
	$query = "select * from tab_query where username='".$_SESSION['loggedIn']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	  ?>
	

	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['doc_name']; ?></font></td>	
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['username']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['question']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['ans']; ?></font></td>
      
		
		
		
		
        
	</tr>
	<?php } ?>
	
	</table>
	<?php include_once("footer.php")?>
</div>	   <!-- End container -->		
</div>	<!-- End row -->	
</div>
</div>




