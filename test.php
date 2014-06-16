<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>..::Test LOGIN::..</title>
</head>
<body >
<form name="form1" enctype="multipart/form-data" method="POST" action="check_login.php">
<?php
$nameLink = "http://www.omdbapi.com/?s=superman";
$tmp = file_get_contents("http://www.omdbapi.com/?s=superman");
//$tmp =json_decode($json);
	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}

		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
	
	$init = new stdClass;

	// Add some test data
	$init->foo = "Test data";
	$init->bar = new stdClass;
	$init->bar->baaz = "Testing";
	$init->bar->fooz = new stdClass;
	$init->bar->fooz->baz = "Testing again";
	$init->foox = "Just test";

	// Convert array to object and then object back to array
	$array = objectToArray($tmp);
	//$object = arrayToObject($array);

	// <span id="IL_AD5" class="IL_AD">Print</span> objects and array
	//print_r($init);
	//echo "\n";
	print_r($array);
	echo "\n";
	//print_r($object);
		
?>
</form>
</body>
</html>
