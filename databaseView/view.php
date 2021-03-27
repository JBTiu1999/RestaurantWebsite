<?php
	function getFoodCuisines(){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT foodCuisine FROM foodlist";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['foodCuisine']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}
	
	function getFoodType(){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT foodType FROM foodlist";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['foodType']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}

	function getFoodName($cuisine, $type){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT foodName FROM foodlist WHERE foodCuisine = '$cuisine' AND foodType = '$type'";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['foodName']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}
	
	function getFoodImage($cuisine, $type){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT imageLocation FROM foodlist WHERE foodCuisine = '$cuisine' AND foodType = '$type'";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['imageLocation']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}
	
	function getFoodNameCuisine($cuisine){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT foodName FROM foodlist WHERE foodCuisine = '$cuisine'";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['foodName']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}
	
	function getFoodNameType($type){
		include 'dbh.inc.php';
			
		$resultArray = array();
				
		$sql = "SELECT foodName FROM foodlist WHERE foodType = '$type'";
				
		$result = mysqli_query($link, $sql);
		if($result){
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					array_push($resultArray ,$row['foodName']);
				}
			}
			//clear result variable
			mysqli_free_result($result);
		}
		else{
			echo "";
		}
		mysqli_close($link);
		return $resultArray;
	}
	
?>