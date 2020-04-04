
<!-- Static Property in OOP -->
<?php

class Weather{

	public static $tempCondition= ['cold', 'mild', 'warm'];


	public static function celsuisToFarenheit($c){

		return $c * 9 / 5 + 32;


	}

	public static function determineTempCondition($f){

		if ($f <40) {
			return self::$tempCondition[0];
		} elseif ($f >70) {
			return self::$tempCondition[1];
		} else{
			return self::$tempCondition[2];
		}


	}
}



// print_r(Weather::$tempCondition);
// echo Weather::celsuisToFarenheit(40);

echo Weather::determineTempCondition(100);




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>