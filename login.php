<?php
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$user = $obj["username"];

if(strcmp($user, "tpl") == 0){
	$unixtime = time();
	$out = '{';	
	$out = $out . '"status":true,';
	$out = $out . '"data":{"id":1,"username":"' . $user . '",';
	$out = $out . '"token":"' . 'tokentpl' . '",';
	$out = $out . '"loginDate":' . $unixtime . ',';
	$out = $out . '"expiredDate":' . ($unixtime + (7*24*60*60)) . ',';        
	$out = $out . '"isExpired":true},';
        $out = $out . '"message":"login success"';        
	$out = $out . '}';
	echo $out;
}else{
	$out = '{';
	$out = $out . '"status":false,';
	$out = $out . '"data":"",';
	$out = $out . '"message":"login fail"';        
	echo $out;
}
?>