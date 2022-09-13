<?php
include "database.php";
$result = mysqli_query($connect, "SELECT * FROM `cheliki`");
$arr = mysqli_fetch_all($result);
foreach ($arr as $sub) {
	foreach ($sub as $elem) {
		echo $elem; 

	}
	echo "<br>";
	if ($elem >= 18) {
		echo "совершеннолетний";
	} else {
		echo "несовершеннолетний";
	} 
	echo '<br>';
}

?>
