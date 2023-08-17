<?php
 include_once("config/config.php");  



 include("Userheader.php"); 

?>

<?php

mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("jobportal")  or die(mysql_error());
if(isset($_GET['Sno']))
	{
		 $query ="select * from jobdetails where Sno='".$_GET['Sno']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
	$row = mysql_fetch_assoc($result);
//$query = "update tab_count set des_name='".$_GET['des']."',`count`=`count`+1 where des_name='".$row['des_name']."'";
	//mysql_query($query);
	
		

	}
else

		{
		
		//$query = "insert into tab_count(`des_name`,`count`) values('".$_GET['des']."','1')";
	//mysql_query($query);
		}
	}
	
?>

<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<div id="right_navi" align="center">
	<br />

	<form action="symptoms.php" name="contactform" class="row" method="post">
	<div align=center><h2> Apply Job </h2></div>
	<center >
	
	<table>
	<tr>
	<td>
	Sno :
	</td>
	
	<td>
	<input type="text" name="Seno"  value="<?php echo $row['Sno']; ?>" />
	</td>
	</tr>
	<tr>
	<td>
	Company name :
	</td>
	
	<td>
	<input type="text" name="C_name"  value="<?php echo $row['Cuname']; ?>" />
	</td>
	</tr>
	<tr>
	<td>
	Apply Date :
	</td>
	
	<td>
	<input type="text" name="Adate"  value="<?php echo date("d/m/y"); ?>" />
	</td>
	</tr>
	<tr>
	<td>
	Resume :
	</td>
	
	<td>
	<input accept="doc/docx" name="filename" size="40" type="file" />
	</td>
	</tr>
	</table>
	<table>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input name="Upload" type="submit" value="Upload" /></td>
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>
	</table>
	<table border="2" cellspacing="2" class="displaycontent" width="850" style="border:10px solid gray;">
	
	
	
	<?php

//if we clicked on Upload button
 $Upload;
if($_POST['Upload'] == 'Upload')

  {

  //make the allowed extensions

 

  $goodExtensions = array(

 

  '.doc',

 

  '.docx',

 

  ); 

 

  $error='';

 

  //set the current directory where you wanna upload the doc/docx files

 

 // $uploaddir = './ ';

 $uploaddir = 'testUpload';

  $name = $_FILES['filename']['name'];//get the name of the file that will be uploaded

 

  $min_filesize=10;//set up a minimum file size(a doc/docx can't be lower then 10 bytes)

 

  $stem=substr($name,0,strpos($name,'.'));

 

  //take the file extension

 

  $extension = substr($name, strpos($name,'.'), strlen($name)-1);

 

  //verify if the file extension is doc or docx

 

   if(!in_array($extension,$goodExtensions))

 

     $error.='Extension not allowed<br>';

 

echo "<span> </span>"; //verify if the file size of the file being uploaded is greater then 1

 

   if(filesize($_FILES['filename']['tmp_name']) < $min_filesize)

     $error.='File size too small<br>'."\n";

  $uploadfile = $uploaddir . $stem.$extension;

$filename=$stem.$extension;

if ($error=='')

{

//upload the file to

if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {

echo 'File Uploaded. Thank You.';

}

}

else echo $error;

}
	//header("location:searchjob.php");
?>





	</table>
</form>

</div>
</div>
<?php include("footer.php");?>
