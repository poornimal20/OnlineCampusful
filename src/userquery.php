<?php

include('userheader.php');
include("config/config.php");  
error_reporting(0);

?>


<?php
if(isset($_POST['register'])){


$query = "INSERT INTO `tab_query` (`doc_name`, `username`, `question`, `ans`) VALUES ('".$_POST['txt2']."','".$_POST['txt1']."','".$_POST['txt3']."','0')";
//	echo $query;exit;
	if(mysql_query($query)){
		echo '<script> alert("Your Query Send to Admin");</script>';
	}
	else{
		$_SESSION['message']='<span class="fail">Some errors occurs</span>';
	}
}

?>

<div id="right_navi" align="center">
	<br />
	<form action="" name="register_form"  id="register_form"  method="post">
	
	<table border="0" cellspacing="4" cellpadding="4"  class="displaycontent"  width="500">

	<tr>
		<th colspan="2">Enter Your Query Here:</th>
	<tr>
	<tr>
		<td class="col">Your Name:</td>
		<td><input type="text" name="txt1" class="required" value="<?php echo $_SESSION['loggedIn']; ?>" /></td>
	</tr>
<tr>
		<td class="col">To:</td>
		<td><input type="text" name="txt2" class="required" value="admin" /></td>
	</tr>
	<tr>
		<td class="col">Message:</td>
		<td><textarea name="txt3"> </textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Post Query" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>
	</table>
	</form>

</div>
</div>




<?php

include('footer.php');



?>


