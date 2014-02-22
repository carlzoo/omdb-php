<?php

class omdb_movie extends omdb{
	public $title;
	public $year;
	public $rating;
	public $releasedate;
	public $runtime;
	public $genre;
	public $director;
	public $writer;
	public $actors;
	public $plot;
	public $language;
	public $country;
	public $awards;
	public $poster;
	public $metascore;
	public $imdbrating;
	public $imdbvotes;
	public $imdbid;
	public $type;
	
	//constructor
	//where $data is a decoded json data with true response
	function __construct($data){
		$this->title= isset($data->Title) ? $data->Title : "Unknown Title";
		$this->type = isset($data->Type) ? $data->Type : "Unknown film type";
		$this->year= isset($data->Year) ? $data->Year : "Unknown Year";
		$this->rating= isset($data->Rated) ? $data->Rated : "Unknown rating";
		$this->releasedate= isset($data->Released) ? $data->Released : "Unknown release date";
		$this->runtime= isset($data->Runtime) ? $data->Runtime : "Unknown runtime";
		$this->genre= isset($data->Genre) ? $data->Genre : "Unknown genre";
		$this->director= isset($data->Director) ? $data->Director : "Unknown director(s)";
		$this->writer= isset($data->Writer) ? $data->Writer : "Unknown writer(s)";
		$this->actors= isset($data->Actors) ? $data->Actors : "Unknown actor(s)";
		$this->plot= isset($data->Plot) ? $data->Plot : "Unknown plot";
		$this->language= isset($data->Language) ? $data->Language : "Unknown language";
		$this->country= isset($data->Country) ? $data->Country : "Unknown production country";
		$this->awards= isset($data->Awards) ? $data->Awards : "Unknown Awards";
		$this->poster = isset($data->Poster) ? "<img src='" . $data->Poster . "'>" : "No poster available";
		$this->metascore= isset($data->Metascore) ? $data->Metascore : "No Metascore available";
		$this->imdbrating= isset($data->imdbRating) ? $data->imdbRating : "No IMDB Rating available yet";
		$this->imdbvotes= isset($data->imdbVotes) ? $data->imdbVotes : "No votes on IMDB yet";
		$this->imdbid= isset($data->imdbID) ? $data->imdbID : "No IMDB ID available";
	}
	
	//$title, $year,$imdbid must be all strings
	public function getmovie($title,$year,$imdbid){
	$params = array('title' => (string)$title,
	'year' => (string)$year,
	'imdbid' => (string)$imdbid);
	
	$results=omdb::doquery($params);
	
	if($results==false){
		die("No results found");
		}
	else {
		return new omdb_movie($results);
		}
	}
}

?>
