<html>
<title>symptom</title>
</body>
<?php

require "mysql_conn.php";
$sym=$_POST['symptom'];
$sql="SELECT s_desc from symptom where s_name='$sym';";
//$sql="SELECT doc_fname,doc_contact,doc_profile,doc_place,doc_schedule from doctor where s_name='$sym';";
$result=mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);

echo $sym;echo "<br>";
echo $row['s_desc'];
?>
<br>

<form action="carousel.html">
<button type="submit" action="submit" value="submit"> Home </button>
</form><br>

<form action="symptom-search.php">
<button type="submit" action="submit" value="submit"> Search for another symptom </button>
</form>

</body>
</html>