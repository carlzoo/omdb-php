omdb-php
========

PHP wrapper class for OMDB API
http://omdbapi.com

Made this for my own use and because I could not find any classes for doing this job for my needs on the Internet.

Searches for movie and returns data in an object:

Example:

>
<?php <br>
include("omdb.php") <br>
print_r(omdb_movie::getmovie("Freight","2010","")); <br>
?>

will return:

>
omdb_movie Object <br>
( <br>
    [title] => Freight <br>
    [year] => 2010 <br>
    [rating] => N/A <br>
    [releasedate] => N/A <br>
    [runtime] => 92 min <br>
    [genre] => Action, Crime, Drama <br>
    [director] => Stuart St. Paul <br>
    [writer] => Stuart St. Paul <br>
    [actors] => Billy Murray, Craig Fairbrass, Laura Aikman, Sam Kennard <br>
    [plot] => A Russian gang in the UK traffic Eastern Europeans then enslave them, the women to sex, the men to illegal fights. They cross a local businessman and a war escalates. <br>
    [language] => English <br>
    [country] => UK <br>
    [awards] => 1 win. <br>
    [poster] => <img src=' http://ia.media-imdb.com/images/M/MV5BMTg4MDg4ODAwOV5BMl5BanBnXkFtZTcwMjI4OTk5Mw@@._V1_SX300.jpg' > <br>
    [metascore] => N/A <br>
    [imdbrating] => 4.2 <br>
    [imdbvotes] => 607 <br>
    [imdbid] => tt1376404 <br>
    [type] => movie <br>
)

Either the title or the ID must be filled otherwise there will be no results

Features to be added:

Search

Rottentomatoes info

Short or extended plot
