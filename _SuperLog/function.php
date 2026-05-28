<?
function url_validate($link){ 
	$url_parts = @parse_url($link);
	/*
	foreach($url_parts as $key => $value){
	echo "$key => $value\r\n";
	}
	*/
	if(empty($url_parts["host"])) return(false);
	if(!empty($url_parts["path"])){
		$documentpath = $url_parts["path"];
	}else{
		$documentpath = "/";
	}

	if(!empty($url_parts["query"])){
		$documentpath .= "?" . $url_parts["query"];
	}

	$host = $url_parts["host"];
	$port = $url_parts["port"];
	// Now (HTTP-)GET $documentpath at $host";

	if(empty($port)) $port="80";
	$socket = @fsockopen($host, $port, $errno, $errstr, 30);
	if(!$socket){
		return(false);
	}else{
		fwrite($socket, "HEAD ".$documentpath." HTTP/1.0\r\nHost: $host\r\n\r\n");
		$http_response = fgets($socket, 22);
		if((ereg("200 OK", $http_response, $regs)) || (ereg("302 Found", $http_response, $regs))){
			//echo $http_response; 
			return(true);
			fclose($socket);
		}else{
			//echo "HTTP-Response: $http_response<br>";
			return(false);
		}
	}
} 
?>