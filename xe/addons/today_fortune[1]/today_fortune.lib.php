<?php
    /**
     * @brief If member_srl exists in the div or span, replace to image name or nick image for each member_srl
     **/
	function remote_get_contents($url)
	{
		if (function_exists('curl_get_contents') AND function_exists('curl_init')) {
	    	return curl_get_contents($url);
	    } else {
	    	// A litte slower, but (usually) gets the job done
	        return file_get_contents($url);
	    }
	}
	
	function curl_get_contents($url)
	{
        // Initiate the curl session
        $ch = curl_init();
        
        // Set the URL
        curl_setopt($ch, CURLOPT_URL, $url);
        
        // Removes the headers from the output
        curl_setopt($ch, CURLOPT_HEADER, 0);
        
        // Return the output instead of displaying it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // Execute the curl session
        $output = curl_exec($ch);
        
        // Close the curl session
        curl_close($ch);
        
        // Return the output as a variable
        return $output;
	}

	/*
	 * today : 조회하고자 하는 날짜
	 * birthday : 생년월일
	 * lunar : 음력 0 / 양력 1
	 * monthType : 윤달 0 / 평달 1
	 */
	function getTodayFortune($today, $birthday, $lunar, $monthType) {
		$url = 'https://erumyec1.azurewebsites.net/erumyService.asmx/GetTodayFortune?today='.$today.'&birthday='.$birthday.'&lunar='.$lunar.'&monthType='.$monthType;
		
		$json = remote_get_contents($url);
		$safe_json = str_replace("\n", "\\n", $json);
		$object = json_decode($safe_json);
		return $object->fortune;
	}
?>
