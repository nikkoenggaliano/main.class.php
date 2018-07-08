<?php 

class Nepska
{
	function _curl($url='', $var='') {
    	global $config;
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, $url);
    	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    	curl_setopt($curl, CURLOPT_USERAGENT, "Osirish Da Bots");
    		if($var) 
    		{	
        		curl_setopt($curl, CURLOPT_POST, true);
        		curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
    		}
    	curl_setopt($curl, CURLOPT_COOKIEFILE, 't.txt');
    	curl_setopt($curl, CURLOPT_COOKIEJAR, 't.txt');
    	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    	$result = curl_exec($curl);
    	curl_close($curl);
    return $result;
	}

	function fetch_value($str, $find_start, $find_end) {
    	$start = @strpos($str, $find_start);
    		if ($start === false) 
    		{
        		return "";
    		}
    	$length = strlen($find_start);
    	$end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
	}

	
}


// $main = new Nepska();

