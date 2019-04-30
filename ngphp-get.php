<?php

// try commenting out the header setting to experiment how the back end refuses the request
header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

// retreive data from the request
$getdata = $_GET['phone'];

// process data
// (this example simply extracts the data and restructures them back)
$request = json_decode($getdata);

$data = [];
if (is_array($request) || is_object($request)) {
	foreach ($request as $k => $v) {
	   $data[0]['get'.$k] = $v;
	}
}

// send response (in json format) back the front end
echo json_encode(['content'=>$data]);
?>