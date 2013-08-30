<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$connection=mysqli_connect("localhost","root","","emed");
if(mysqli_connect_errno())
{
	echo "failed to connect".mysqli_connect_error();
//	mysqli_close($connection);
}
$sql="insert into dis(id) values(50)";
if (mysqli_query($connection,$sql))
{
	echo "table created";
}

?>

</body>
</html>