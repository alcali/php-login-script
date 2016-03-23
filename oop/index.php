<?php

require 'function.php';
require 'database.php';
require 'class.user.php';

// $db = new Database();
// $db->getDb();

$arrayData = array("hello" => "foo", "hi" => "bar", "ciao" => "qux");
$dataVal = "";

/*foreach($arrayData as $key => $value)
{
	$dataVal .= $key . " = " . $value;
}
*/

// $dataVal = implode("", array_keys($arrayData));
// echo implode(implode("=", array_keys($arrayData)) . ",", array_values($arrayData));
// echo implode_with_key($arrayData);

echo implode_with_key($arrayData, " = ", ", ");


?>