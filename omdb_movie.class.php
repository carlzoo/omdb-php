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
	public $rtmeter;
	public $rtimage;
	public $rtrating;
	public $rtreviews;
	public $rtfresh;
	public $rtrotten;
	public $rtconsensus;
	public $rtusermeter;
	public $rtuserrating;
	public $rtuserreviews;
	public $rtdvd;
	public $rtboxoffice;
	public $rtproduction;
	public $rtwebsite;
	
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
		$this->poster = isset($data->Poster) ? $data->Poster : "No poster available";
		$this->metascore= isset($data->Metascore) ? $data->Metascore : "No Metascore available";
		$this->imdbrating= isset($data->imdbRating) ? $data->imdbRating : "No IMDB Rating available yet";
		$this->imdbvotes= isset($data->imdbVotes) ? $data->imdbVotes : "No votes on IMDB yet";
		$this->imdbid= isset($data->imdbID) ? $data->imdbID : "No IMDB ID available";
		$this->rtmeter = isset($data->tomatoMeter) ? $data->tomatoMeter : "No tomato Meter score available";
		$this->rtimage= isset($data->tomatoImage) ? $data->tomatoImage : "No tomato certification available";
		$this->rtrating = isset($data->tomatoRating) ? $data->tomatoRating : "No RT critics rating available";
		$this->rtreviews = isset($data->tomatoReviews) ? $data->tomatoReviews : "No tomato review(s) available";
		$this->rtfresh= isset($data->tomatoFresh) ? $data->tomatoFresh : "No Tomato Fresh ratings found.";
		$this->rtrotten= isset($data->tomatoRotten) ? $data->tomatoRotten : "No Tomato Rotten ratings found.";
		$this->rtconsensus= isset($data->tomatoConsensus) ? $data->tomatoConsensus : "No RT Concensus available.";
		$this->rtusermeter= isset($data->tomatoUserMeter) ? $data->tomatoUserMeter : "No RT User Meter score Available";
		$this->rtuserrating= isset($data->tomatoUserRating) ? $data->tomatoUserRating : "No RT User Rating Available.";
		$this->rtuserreviews= isset($data->tomatoUserReviews) ? $data->tomatoUserReviews : "Unknown number of RT User Reviews.";
		$this->rtdvd= isset($data->tomatoDVD) ? $data->tomatoDVD : "No DVD Release date available.";
		$this->rtboxoffice= isset ($data->BoxOffice) ? $data->BoxOffice : "No Box office figure available.";
		$this->rtproduction= isset ($data->Production) ? $data->Production : "Unknown production company.";
		$this->rtwebsite= isset ($data->Website) ? $data->Website : "Unknown website for movie.";
	}
	
	//$values is an array
	//important to use rt='true' or rt="true" and not rt=true otherwise the value will be 1 or 0
	public function getmovie(array $values){
		//forces client to specify a title or IMDB ID
		if(empty($values['title']) && empty($values['imdbid'])){
			die("Cannot proceed. You must specify a movie title or an IMDB ID <br>\n");
		}
		$title=isset($values['title']) ? "t=" . (string)$values['title'] . "&" : "";
		$year=isset($values['year']) ? "y=" . (string)$values['year'] . "&" : "";
		$imdbid=isset($values['imdbid']) ? "i=" . (string)$values['imdbid'] . "&"  : "";
		$rt=isset($values['rt']) ? "tomatoes=" . (string)$values['rt'] . "&" : "tomatoes=false&";
		$plot=isset($values['plot']) ? "plot=" . (string)$values['plot'] : "plot=short&";
		$apiurl="http://www.omdbapi.com/?";
		
		$url=$apiurl . $year . $imdbid . $title . $rt . $plot;
		$url=str_replace(" ","+",$url); //necessary, otherwise the search will result in a 400 error response
		$results=self::getdata($url);
		
		if($results){
			return new omdb_movie($results);
			}
	}
}

?>
