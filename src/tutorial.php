<?php
include_once("config/config.php");
//LOGGEDIN();
$page = 'tutorial.php';
include_once("Userheader.php");
//$ss=$_SESSION['loggedIn'];
$query ="select * from jobdetails";
//echo $query;
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result)){
	$rows[]= $row;
}
$i =1;
?>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script language="javascript" type="text/javascript" src="javascript/thickbox.js"></script>
<div id="right_contain">
<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<caption ><?php //echo $_SESSION['msg'];$_SESSION['msg']='';?></caption>
	<tr>
		
		
			<th bgcolor=Orange>Sno</th>
		<th bgcolor=Orange>College Name</th>
		<th bgcolor=Orange>Company Name</th>
		<th bgcolor=Orange>Job name</th>
		<th bgcolor=Orange>Job Description</th>
<th bgcolor=Orange>Experiance</th>
<th bgcolor=Orange>Vacancies</th>
<th bgcolor=Orange>Latdate</th>
<th bgcolor=Orange>Venu</th>
	</tr>
	
	<?php 

	if(count($rows) > 0)
	{
	$j=0;
	foreach($rows as $row){ 
		if($j%2==0){
			$newclass = '';
		}
		else{
			$newclass = ' class="zebra"';	
		}
	?>
	<tr <?php echo $newclass; ?>>
		
		
		<td><?php echo $row['Sno'];?></td>
		<td><?php echo $row['Cuname'];?></td>
		<td><?php echo $row['Comname'];?></td>
		<td><?php echo $row['Jobname'];?></td>
			<td><?php echo $row['JobDesc'];?></td>
<td><?php echo $row['Experience'];?></td>
<td><?php echo $row['Vacancies'];?></td>
<td><?php echo $row['LastDate'];?></td>
<td><?php echo $row['Venue'];?></td>
		<?
		
	
	//{ ?>
		
			
		<?php //} ?>
	</tr>
	
	
	<?php 
	$j++;
	}
	}
	
	
	else
		{ 
			?>
	
	<tr><td colspan="12" align="center"> No record Found</td></tr>
	
	
	
	
	<?php } ?>


</table>
</div>
</div>


<? 


	include_once("footer.php");
?>
