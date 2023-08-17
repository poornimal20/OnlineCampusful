<?php
 include_once("config/config.php");  
 if(isset($_POST['login']))
	 
	 {
	$query = "update tab_query set ans='".$_POST['password']."' where id='".$_GET['id']."'";
	mysql_query($query);
		echo '<script>alert("Message send successfully");</script>';
 
 
 }



 include("adminheader.php"); 

?>
<script type="text/javascript">	
  $(document).ready(function(){
    $("#login_form").validate();
  });
</script>
<div align="center">
	<form action="" name="login_form" id="login_form"  method="post">
	<br />
	<table border="0"  class="displaycontent" >
	
	<tr>
		<th colspan="2">Answer</th>
	<tr>
	<tr>
		<td class="col">Qusestion:</td>
		<td><input type="text" name="email_id" value="<?php echo $_GET['que'] ?>" class="required email"/></td>
	</tr>
	<tr>
		<td  class="col">Your Answer:</td>
		<td><textarea name="password"> </textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="login" value="Reply" />
		     	<input type="Reset"  value="Reset" />
			
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	
		
		

	</table>
	</form>

</div>
</div>
<?php include("footer.php")?>
