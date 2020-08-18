<!DOCTYPE html>
<html>
<head>
<title>Image Gallery</title>
<link rel="stylesheet" href="styles.css">
<style >
	.Us-Screen {
		background:  #b103c2 ;
		padding: 10px;
	}

</style>


<form action="upload_us.php" method="post" enctype="multipart/form-data">
        <input type="file" name="usUpload" id="usUpload">
	<span>
        <input type="submit" value="Upload Image" name="submit_us">

<h1>Photos of Us</h1>
<br>

<div class="list">
	<ul>
		
		<li><a href="index.php" class="Us-Screen">Us</a></li>
		<li><a href="dog.php" class="Dog-Screen">DOGS!</a></li>
		<li><a href="slideshow.php" class="SlideShow">Slideshow Options</a></li>
	</ul>
</div>
<br>


</head>
<body>
<div class="pictures">
<?php
$dir=glob('Us/{*.jpg}',GLOB_BRACE);
foreach ($dir as $value){
?>
<div class="thumbnails">
	<img src="<?php echo $value; ?>" alt="<?php ?>">
</div>
<?php
}
?>
</div>
</body>

</html>
