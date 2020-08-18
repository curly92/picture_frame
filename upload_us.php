<?php
$target_dir = "Us/";
$target_file = $target_dir.basename($_FILES["usUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit_us"])) {
	$check = getimagesize($_FILES["usUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - ". $check["mime"] .".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
	}


if(file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
	}
if($imageFileType != "jpg") {
	echo "Not a jpg";
}

if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded";
} else {
	if(move_uploaded_file($_FILES["usUpload"]["tmp_name"],$target_file)) {
		header("Location: index.php");
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>

