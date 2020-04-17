<!--connecting to database-->
<?php
	define('WP_MEMORY_LIMIT','100M');
    $servername='localhost';
    $username='f31ee';
    $password='f31ee';
    $dbname = "f31ee";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>