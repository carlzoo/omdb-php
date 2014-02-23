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
print_r(omdb_movie::getmovie("finding neverland","2004","")); <br>
?>

will return:

>
omdb_movie Object <br>
( <br>
    [title] => Finding Neverland <br>
    [year] => 2004 <br>
    [rating] => PG <br>
    [releasedate] => 24 Nov 2004 <br>
    [runtime] => 106 min <br>
    [genre] => Biography, Drama, Family <br>
    [director] => Marc Forster <br>
    [writer] => Allan Knee (play), David Magee (screenplay) <br>
    [actors] => Johnny Depp, Kate Winslet, Julie Christie, Radha Mitchell <br>
    [plot] => The story of J.M. Barrie's friendship with a family who inspired him to create Peter Pan. <br>
    [language] => English <br>
    [country] => USA, UK <br>
    [awards] => Won 1 Oscar. Another 17 wins & 56 nominations. <br>
    [poster] => <img src='http://ia.media-imdb.com/images/M/MV5BMTMxNzYzNzUzMV5BMl5BanBnXkFtZTYwNjcwMjE3._V1_SX300.jpg'>
    <br>
    [metascore] => 67 <br>
    [imdbrating] => 7.8 <br>
    [imdbvotes] => 148,143 <br>
    [imdbid] => tt0308644 <br>
    [type] => movie <br>
)

>
<?php <br>
include("omdb.php"); <br>
print_r(omdb_search::findmovie("lion king")); <br>
?> <br>

will return:

>
Array 
( <br>
    [0] => omdb_search Object <br>
        ( <br>
            [title] => The Lion King <br>
            [year] => 1994 <br>
            [imdbid] => tt0110357 <br> 
            [type] => movie <br>
        )

    [1] => omdb_search Object 
        (
            [title] => The Lion King 2: Simba's Pride
            [year] => 1998
            [imdbid] => tt0120131
            [type] => movie
        )

    [2] => omdb_search Object
        (
            [title] => The Lion King 1 1/2
            [year] => 2004
            [imdbid] => tt0318403
            [type] => movie
        )

    [3] => omdb_search Object
        (
            [title] => The Lion King
            [year] => 1994
            [imdbid] => tt0323073
            [type] => game
        )

    [4] => omdb_search Object
        (
            [title] => Leo the Lion: King of the Jungle
            [year] => 1994
            [imdbid] => tt0234092
            [type] => movie
        )

    [5] => omdb_search Object
        (
            [title] => The Making of 'The Lion King'
            [year] => 1994
            [imdbid] => tt0366742
            [type] => movie
        )

    [6] => omdb_search Object
        (
            [title] => The Lion King: A Musical Journey with Elton John
            [year] => 1994
            [imdbid] => tt0245234
            [type] => movie
        )

    [7] => omdb_search Object
        (
            [title] => The Lion King: Timon and Pumbaa's Jungle Games
            [year] => 1995
            [imdbid] => tt0215934
            [type] => game
        )

    [8] => omdb_search Object
        (
            [title] => The Lion King II: Simba's Pride Active Play
            [year] => 1998
            [imdbid] => tt0215933
            [type] => game
        )

    [9] => omdb_search Object
        (
            [title] => Lion King
            [year] => 2007
            [imdbid] => tt0935520
            [type] => episode
        )

)


Either the title or the ID must be filled otherwise there will be no results

Features to be added:

Rottentomatoes info

Short or extended plot
