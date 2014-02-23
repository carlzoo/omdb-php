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
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		curl_setopt($ch, CURLOPT_HEADER, false);
		$response = curl_exec($ch);
		
		$responsecode = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		if($responsecode != 200) {
			    die("Unable to fetch data from OMDB");
			}
		$data=json_decode($response);
		if($data->Response=="False"){
			die("Error: " . $data->Error . "<br>\n");
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
		$title=str_replace(" ","+",$title); //necessary, otherwise the search will result in a 400 error response
		$url=self::apiurl . $year . "&" . $imdbid . "&" . $title;
		$data=self::getdata($url);
		return $data;
	}
	
	//$term must be nonempty otherwise no results will be returned
	static function search($term){
		$term=str_replace(" ","+",$term); //necessary, otherwise the search will result in a 400 error response
		$q="s=" . $term;
		$url=self::apiurl . $q;
		$data=self::getdata($url);
		return $data;
	}
}

?>
