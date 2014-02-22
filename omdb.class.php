<?php

class omdb{
	const apiurl="http://www.omdbapi.com/?";
	
	//fetches data from omdbpi
	//returns false if no movie is found, otherwise returns json decoded data
	static function getdata($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_HEADER, false);
		$response = curl_exec($ch);
		
		$responsecode = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		if($responsecode != 200) {
			    die("Unable to fetch data from OMDB");
			}
		$data=json_decode($response);
		if($data->Response=="False"){
			echo $data->Error . "<br>\n";
			return false;
		}
		else{
			return $data;
		}
	}
	
	//$params is an array
	static function doquery($params){
		$year="y=" . $params['year'];
		$imdbid="i=" . $params['imdbid'];
		$title="t=" . $params['title'];
		$url=self::apiurl . $year . "&" . $imdbid . "&" . $title;
		$data=self::getdata($url);
		return $data;
	}
}

?>
