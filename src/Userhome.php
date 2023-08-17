<?php
error_reporting(0);
include('Userheader.php');

?>

<?php
session_start();

?>


<center>

<form action="" name="Userhome" id="Userhome"  method="post">
	<br />
	<br />
	<table border="0"  class="displaycontent" bgcolor="Orange" width="300" height="200">
	<caption>
<?php echo $_SESSION['message'];$_SESSION['message']=''; ?></caption>
	<tr>
		<td colspan="1">
		<f2>Welcome</f2></td>
		<td><b><input type="text" name="email_id"  Value="<?php echo $_SESSION['loggedIn'];?>" readonly/></b></td>
		
	<tr>
		
	</table>


	</form>
</center>

<?php

include('footer.php');

?>


