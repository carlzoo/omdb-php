omdb-php
========

PHP wrapper class for OMDB API
http://omdbapi.com

Made this for my own use and because I could not find any classes for doing this job for my needs on the Internet.

Searches for movie and returns data in an object:

Example:

>
<?php
require_once("omdb.class.php");
require_once("omdb_movie.class.php");
print_r(omdb_movie::getmovie("Freight","2010",""));
?>

will return:

>
omdb_movie Object
(
    [title] => Freight
    [year] => 2010
    [rating] => N/A
    [releasedate] => N/A
    [runtime] => 92 min
    [genre] => Action, Crime, Drama
    [director] => Stuart St. Paul
    [writer] => Stuart St. Paul
    [actors] => Billy Murray, Craig Fairbrass, Laura Aikman, Sam Kennard
    [plot] => A Russian gang in the UK traffic Eastern Europeans then enslave them, the women to sex, the men to illegal fights. They cross a local businessman and a war escalates.
    [language] => English
    [country] => UK
    [awards] => 1 win.
    [poster] => <img src=' http://ia.media-imdb.com/images/M/MV5BMTg4MDg4ODAwOV5BMl5BanBnXkFtZTcwMjI4OTk5Mw@@._V1_SX300.jpg' >
    [metascore] => N/A
    [imdbrating] => 4.2
    [imdbvotes] => 607
    [imdbid] => tt1376404
    [type] => movie
)

Either the title or the ID must be filled otherwise there will be no results

Features to be added:
Search
Rottentomatoes info
Short or extended plot
