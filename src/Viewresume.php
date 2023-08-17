<?php
include_once("config/config.php");
//LOGGEDIN();
$page = 'Viewresume.php';
include('Proheader.php');
//$ss=$_SESSION['loggedIn'];
$query ="select * from jobapply where Cname='".$_SESSION['loggedIn']."'";
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
		<th bgcolor=Orange>ID</th>
		<th bgcolor=Orange>S.No</th>
		<th bgcolor=Orange>Company Name</th>
		<th bgcolor=Orange>Apply Date</th>
		<th bgcolor=Orange>File</th>
		<th bgcolor=Orange>User Name</th>

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
		<td><?php echo $i++;?></td>
	
		<td><?php echo $row['Sno'];?></td>
		<td><?php echo $row['Cname'];?></td>
		<td><?php echo $row['Applydate'];?></td>
		<td><a target="_blank" href="uploads/<?php echo $row['upload_path'];?>" ><?php echo $row['upload_path'];?></a></td>
		<td><a href ="Interview.php?U_name="><?php echo $row['U_name']; ?></a></td>

		<?//php if($_SESSION['user_type']=='staff' || $_SESSION['user_type']=='super')
	
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
