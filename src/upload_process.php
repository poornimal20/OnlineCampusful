<?php
include_once("config/config.php");
//ADMININ();

//$depart = array("1"=>"staff","0"=>"student");
//var_dump();
//if(isset($_POST['submit'])){
	$error  = uploadFun();
	//$error  = FALSE;
	//$upload_path = false;
	if($error == FALSE){
		$upload_path = $_FILES["fileToUpload"]["name"];
		$query = "INSERT INTO `jobapply` (`Sno`, `Cname`,`Applydate`, `upload_path`,`U_name`, `status`) VALUES ";
		$query .= "(".$_POST['Seno'].", '".$_POST['C_name']."', '".$_POST['Adate']."', '".$upload_path."','".$_POST['email_id']."','0')";
		if(mysql_query($query)){
			$_SESSION['msg'] = '<span class="succuess">Record Inserted Succuessfully</span>';
			header("Location:upload.php");
			exit;

		}
		else{
			$_SESSION['msg'] = '<span class="error">Record Not Inserted</span>';
		//	header("Location:upload.php");
			exit;
		}

}

else{
	header("Location:upload.php");
	exit;
}
//}



function uploadFun(){
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$b=TRUE;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000 && false) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		    return "Sorry, your file was not uploaded.";
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$b= FALSE;
	    } else {
		return "Sorry, there was an error uploading your file.";
	    }
	}
	return $b;
} 



?>
