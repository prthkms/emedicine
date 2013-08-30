<html>
<body>
<?php 

require 'mysql_conn.php';
$sym=$_POST['symptom'];


$sql = "SELECT * FROM disease where d_id in (SELECT d_id FROM ds where s_id in (SELECT s_id FROM symptom where s_name=\"$sym[0]\" or s_name=\"$sym[1]\" or s_name=\"$sym[2]\") group by d_id);";
//echo $sql;
$result=mysqli_query($connection,$sql);
$bla=mysqli_num_rows($result);

//echo $bla[0];


if (!count($bla)) 
{
	echo "The symptoms you enterend does not correspond to any disease in the database. We advice you to contact a diagnostician immediately.";
	echo "</br>	
	<form action=\"home.html\">
	<button type=\"submit\" action=\"submit\" value=\"submit\"> Home </button>
	</form>";
}
else
{
	echo "The probable diseases based on your symptoms are...";
	while($row = mysqli_fetch_array($result))
	{
		$domain = $row['d_domain'];
		$sql1 = "SELECT doc_fname,doc_profile,doc_place,doc_contact,doc_schedule from doctor where doc_domain='$domain'";
		$doctor_result=mysqli_query($connection,$sql1);
		
		echo "<br><br><h3>";
		echo $row['d_name'];echo "</h3><br>";
		echo $row['d_desc'];echo "<br><br>";
		echo "Recommended doctor : ";
		while($doctor_row = mysqli_fetch_array($doctor_result))
		{
			echo $doctor_row['doc_fname'];
			echo "Contact : ".$doctor_row['doc_contact'];echo "<br>";
			echo "Profile : ".$doctor_row['doc_profile'];echo "<br><br>";
		}
		echo "<br><br><br>";
	}
	echo "<form action=\"carousel.html\">
	<button type=\"submit\" action=\"submit\" value=\"submit\"> Home </button>
	</form>	";
}

?>
</body>
</html>

 