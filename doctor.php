<html>
<title>symptom</title>
</body>
<?php

require "mysql_conn.php";
$sym=$_POST['doctor'];
$sql="SELECT doc_fname,doc_contact,doc_profile,doc_place,doc_schedule from doctor where doc_fname='$sym';";
//echo $sql;
$result=mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);
echo $row['doc_fname'];echo "<br>";
echo "Contact : ".$row['doc_contact'];echo "<br>";
echo "Profile : ".$row['doc_profile']; 
?>
<br>
<form action="carousel.html">
<button type="submit" action="submit" value="submit"> Home </button>
</form><br>

<form action="doctor-search.php">
<button type="submit" action="submit" value="submit"> search another doctor </button>
</form>

</body>
</html>