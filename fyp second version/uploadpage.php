<!doctype html>
<html lang="en">

<head>
    <title>FYP index</title>
    <meta charset=“utf-8”>
    <link rel="stylesheet" href="css.css?t=<?=rand();?>">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	
</head>

<body>
<div id="wrapper">
    <header>
	<a href="index.php">
	<img src="LOGO.png" alt="logo" width="180px" height="60px" class="logo">
	</a>
        <nav>
            <input type="text" placeholder="Search.." class="searchbar" style="width:600px; height:35px;" >
		</nav>

    <a href="about.html"><input type="button" name="about" value="About Us" class="login" style="width:150px; height:37px;"></a>
        
    </header>
<div style="background-color:#e99021;">
  
<form action="forupload.php" method="post" id="registerform" enctype="multipart/form-data">
<label>Please Insert your game Zip File in Webgl format.</label>  
					 <br>
					 <br>
                     <input type="file" name="zip_file" />  
					 <Br>
                     <br />  
                     <input type="submit" name="btn_zip" class="btn btn-info" value="Upload" /> 
					 
<br>
</form>
<form action="insertgame.php" method="post" id="registerform">
 <br>
 <input type="text" name="name" id="name" placeholder="Name" required style="width:300px;">
 <br>
 <br>
 <input type="text" name="description" id="description" placeholder="Description" required style="width:300px; height:100px ;">
 <br>
 <br>
 <input id="submit" type="submit" value="Done"  name="submit" class="submit-button" style="color:#e99021;width:200px;">
 <br>
 <br>
</form>
</div>

<footer>
   <p><small>Copyright Fion<small></p>
</footer>
</div>

</body>

</html>