<!doctype html>
<html lang="en">

<head>
    <title>FYP index</title>
    <meta charset=“utf-8”>
    <link rel="stylesheet" href="css.css?t=<?=rand();?>">
	<script type="text/javaScript" src= "indexjs.js"></script>
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

<div class="content">

<h2> <bold>All Games<bold></h2>
<table>
<?php
require "db.php";
$sql = "SELECT link FROM games";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $linklist[] = $row["link"];
    }
} else {
    echo "error";
}
mysqli_close($conn);
?>
	<tr class="gamepart">
		<td>
			<a href="game1.html"><img src="Overwatch.jpg" style="width:100%" ></a>
		</td>
		
		<td>
			<a href=<?php echo $linklist[0];?>><img src="Overwatch.jpg" style="width:100%" ></a>
		</td>
		
		<td>
			<img src="Overwatch.jpg" style="width:100%">
		</td>
	</tr>
	<tr style="background-color:white;" class="gamepart">
		<td>
		 <p> Mini Checkers</p>
		 <br>
		 <p> Game testing using iframe</p>
		</td>
		<td>
		 <p> Multiplex</p>
		 <br>
		 <p> Learn about Binary Numbers</p>
		</td>
		<td>
		 <p> Name</p>
		 <br>
		 <p> Description</p>
		</td>
	</tr>
</table>
<br>
<br>
<table>
	<tr class="gamepart" style="border-spacing:30px 30px">
		<td>
			<img src="Overwatch.jpg" style="width:100%">
		</td>
		
		<td>
			<img src="Overwatch.jpg" style="width:100%">
		</td>
		
		<td>
			<img src="Overwatch.jpg" style="width:100%">
		</td>
	</tr>
	<tr style="background-color:white;" class="gamepart">
		<td>
		 <p> Name</p>
		 <br>
		 <p> Description</p>
		</td>
		<td>
		 <p> Name</p>
		 <br>
		 <p> Description</p>
		</td>
		<td>
		 <p> Name</p>
		 <br>
		 <p> Description</p>
		</td>
	</tr>
</table>
<br>
<br>


</div>

<footer>
   <p><small>Copyright Fion<small></p>
</footer>
</div>

</body>

</html>
