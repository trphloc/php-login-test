<?php
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$token = $obj["tokenValue"];

if(strcmp($token, "tokentpl") == 0 or
   strcmp($token, "tokentpl1") == 0 or
   strcmp($token, "tokentpl2") == 0 or){
	$unixtime = time();
	$out = '{';	
	$out = $out . '"status":true,';
	$out = $out . '"data":{"id":1,"username":"' . $user . '",';
	$out = $out . '"token":"' . $token . '",';
	$out = $out . '"loginDate":' . $unixtime . ',';
	$out = $out . '"expiredDate":' . ($unixtime + (7*24*60*60)) . ',';        
	$out = $out . '"isExpired":false}';
	$out = $out . '}';
	echo $out;
}else{
	$unixtime = time();
	$out = '{';	
	$out = $out . '"status":true,';
	$out = $out . '"data":{"id":1,"username":"' . $user . '",';
	$out = $out . '"token":"' . $token . '",';
	$out = $out . '"loginDate":' . ($unixtime - (7*24*60*60)) . ',';
	$out = $out . '"expiredDate":' . $unixtime . ',';        
	$out = $out . '"isExpired":true}';
	$out = $out . '}';
	echo $out;
}
?>