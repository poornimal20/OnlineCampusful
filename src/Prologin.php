<?php
 include_once("config/config.php");  
 if(isset($_POST['login'])){
	$t=time();
	$dt=date("Y-m-d",$t);
	$time=date("h:i:sa");
	$set=$dt.':'.$time;
	 $query ="select * from  jobprovider where U_name='".$_POST['email_id']."'  and password ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		$row = mysql_fetch_assoc($result);
		
		$_SESSION['loggedIn'] = $row['U_name'];
				
				
			if($row['id']==1){
				$_SESSION['login_type'] = 'A';
			}
			else{			
				$_SESSION['login_type'] = 'U';
			}
			header('Location:ProUserhome.php');
			exit;
		}
		else{
			$_SESSION['message']='<span class="fail">Invalid UserName</span>';
		}

	
	header("location:Prologin.php");
	exit;
 }
 



 include_once("header.php"); 
 
function Panel1_BeforeShow(& $sender) {
global $Panel1;
global $UserLogin;

  if (CCGetUserID()) {
     $UserLogin->SetValue(CCGetUserLogin());
  } else {
     $Panel1->Visible = false;
  }
}
?>



<script type="text/javascript">	
  $(document).ready(function(){
    $("#login_form").validate();
  });
</script>
<div align="center">

<img src="login.png" width="300" height="200">

	<form action="" name="Prologin_form" id="Prologin_form"  method="post">
	<br />
	<table border="0"  class="displaycontent" bgcolor="white" width="300" height="200">
	<caption><?php echo $_SESSION['message'];$_SESSION['message']=''; ?></caption>
	<tr>
		<th colspan="2">College Login</th>
	<tr>
	<tr>
		<td class="col"><b>User ID:</b></td>
		<td><b><input type="text" name="email_id" value="" /></b></td>
	</tr>
	<tr>
		<td  class="col"><b>Password:</b></td>
		<td><b><input type="password" name="password" value="" class="required"/></b></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="login" value="Login" />
		     	<input type="Reset"  value="Reset" />
			
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td>
		<td><a href="Provider.php">Create New Account</a></td>
		</td>
	</tr>
	</table>

<table>
<tr>
<td>
<input type="text" name="roll" value="Employee" style="visibility:hidden"/>
</td>
</tr>
</table>
	</form>

<?php include("footer.php")?>

</div>
</div>
