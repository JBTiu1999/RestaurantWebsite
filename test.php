<?php
	
	include 'databaseView/view.php';
	$foodChinese = array();
	
	$foodChinese = getFoodNameCuisine('Chinese');
	$foodFilipino = getFoodNameCuisine('Filipino');
	echo "<img href = 'images/menu/filipino/appetizers/lumpia.jpg'>";
?>