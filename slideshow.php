<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        div.form {
            display:block;
            text-align:center;
        }
        form {
            display:inline-block;
            margin-left: auto;
            margin-right:auto;
            text-align: left;
            font-size: 20pt;
        }
        .SlideShow{
            background:  #b103c2;
            padding: 10px;
        }
	.time {
	margin: 5px;
	padding: 10px;
	}
	form [type="button"] {
	padding: 5px 20px;
	display: flex;
	position: center;
	}
	.power {
		display: flex;
		position: center;
		padding: 10px 20px;
		margin: 20px;
	}
    </style>
    
    <title>Image Gallery</title>
    <h1>Slideshow Options</h1>
    <div class="list">
	<ul>
		
		<li><a href="index.php" class="Us-Screen">Us</a></li>
		<li><a href="dog.php" class="Dog-Screen">DOGS!</a></li>
		<li><a href="slideshow.php" class="SlideShow">Slideshow Options</a></li>
	</ul>
</div>
</head>
<body><br><br>
<div class="form">
    <form name="slideshow" action="http://192.168.0.163:5000" method="post">
        <input type="radio" name="folder" value="Us" checked>
        <label for="us">Pictures of Us</label><br>
        <input type="radio" name="folder" value="Dogs">
        <label for="dogs">Pictures of Dogs</label><br>
        <input type="radio" name="folder" value="all">
        <label for="all">Pictures of Both</label><br><br><br>
        <input type="text" placeholder="5" name="time" class="time">
        <label for="time">Seconds Between Transitions</label><br><br>
        <input type="submit" value="submit" ><br><br>
    </form>
</div>
<div class="power">
	<form action="http://192.168.0.163:5000" method="post">
		<input type="submit" name="poweroff" value="poweroff">
	</form>
</div> 
</body>
</html> 
