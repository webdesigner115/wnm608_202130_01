<?


function file_get_json($filename) {
	$file = file_get_contents($filename);
	return json_decode($file);
}



function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}






?>