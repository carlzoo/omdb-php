<?php
class omdb_search extends omdb{
	public $title;
	public $year;
	public $imdbid;
	public $type;
	
	//constructor
	//where $data is a decoded json data with true response
	function __construct($data){
		$this->title= isset($data->Title) ? $data->Title : "Unknown Title";
		$this->type = isset($data->Type) ? $data->Type : "Unknown film type";
		$this->year= isset($data->Year) ? $data->Year : "Unknown Year";
		$this->imdbid= isset($data->imdbID) ? $data->imdbID : "No IMDB ID available";
	}
	
	public static function findmovie($term){
	$data=self::search($term);
	if($data){
		$i=0;
		foreach($data->Search as $result) {
			$movies[$i]=new omdb_search($result);
			$i++;
			}
		}
		return $movies;
	}
}
?>
