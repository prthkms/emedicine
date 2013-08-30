
<?php
$connection=mysqli_connect("localhost","root","","emed");

if(mysqli_connect_errno($connection))
{
	echo "connection failed".mysqli_connect_error();
}

?>
