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
    <a href="uploadpage.php"><input type="button" name="upload" value="Upload A New Game" class="register" style="width:150px; height:37px;"></a>
    <a href="about.html"><input type="button" name="about" value="About Us" class="login" style="width:150px; height:37px;"></a>
        
    </header>


<div class="container">
	<img src="Overwatch.jpg" style="width:80%; opacity:0.5;">
	<div class="centered">Learning Can Be Fun !!!</div>
  
</div>
<br>
<br>
<table>
<tr style="background-color: #e99021;">
	<td>
		<a href="allgames.php"><img src="Overwatch.jpg" style="width:70%" ></a>
		 <br>
		<p style="color:#ffffff">All Games</p>
	</td>
	
	<td>
		<a href="engineering.php"><img src="Overwatch.jpg" style="width:70%"></a>
		<br>
		<p style="color:#ffffff">Engineering Games</p>
	</td>
	
	<td>
		<a href="math.php"><img src="Overwatch.jpg" style="width:70%"></a>
		<br>
		<p style="color:#ffffff">Maths Games</p>
	</td>
</tr>
</table>

<br>

<footer>
   <p><small>Copyright Fion<small></p>
</footer>
</div>

</body>

</html>
