omdb-php
========

PHP wrapper class for OMDB API
http://omdbapi.com

Made this for my own use and because I could not find any classes for doing this job for my needs on the Internet.

Searches for movie and returns data in an object:

Example:

>
<?php
include("omdb.php"); <br>
$movie1=array('title'=>'Finding Neverland','rt'=>'true'); <br>
$movie2=array('imdbid'=>'tt1285016'); <br>
$movie3=array('title'=>'Star Wars','year'=>2005); <br>
echo "Results for movie1: <br>\n"; 
print_r(omdb_movie::getmovie($movie1)); <br>
echo "\nResults for movie2: <br>\n"; 
print_r(omdb_movie::getmovie($movie2)); <br>
echo "\nResults for a search: <br>\n"; 
print_r(omdb_search::findmovie("lion king")); <br>
echo "\nResults for movie3: <br>\n"; 
print_r(omdb_movie::getmovie($movie3)); <br>
?>

will return:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Results for movie1: <br>
omdb_movie Object
(
    [title] => Finding Neverland
    [year] => 2004
    [rating] => PG
    [releasedate] => 24 Nov 2004
    [runtime] => 106 min
    [genre] => Biography, Drama, Family
    [director] => Marc Forster
    [writer] => Allan Knee (play), David Magee (screenplay)
    [actors] => Johnny Depp, Kate Winslet, Julie Christie, Radha Mitchell
    [plot] => The story of J.M. Barrie's friendship with a family who inspired him to create Peter Pan.
    [language] => English
    [country] => USA, UK
    [awards] => Won 1 Oscar. Another 17 wins & 56 nominations.
    [poster] => http://ia.media-imdb.com/images/M/MV5BMTMxNzYzNzUzMV5BMl5BanBnXkFtZTYwNjcwMjE3._V1_SX300.jpg
    [metascore] => 67
    [imdbrating] => 7.8
    [imdbvotes] => 148,143
    [imdbid] => tt0308644
    [type] => movie
    [rtmeter] => 83
    [rtimage] => certified
    [rtrating] => 7.4
    [rtreviews] => 202
    [rtfresh] => 167
    [rtrotten] => 35
    [rtconsensus] => It won't pass muster for those looking for historical accuracy, but Finding Neverland is a warm, heartfelt drama with a charm all its own -- and Johnny Depp gives a graceful performance as Peter Pan creator J.M. Barrie.
    [rtusermeter] => 87
    [rtuserrating] => 3.7
    [rtuserreviews] => 463,141
    [rtdvd] => No DVD Release date available.
    [rtboxoffice] => $51.6M
    [rtproduction] => Miramax Films
    [rtwebsite] => http://www.miramax.com/jmbarries_neverland/
)

Results for movie2: <br>
omdb_movie Object
(
    [title] => The Social Network
    [year] => 2010
    [rating] => PG-13
    [releasedate] => 01 Oct 2010
    [runtime] => 120 min
    [genre] => Biography, Drama
    [director] => David Fincher
    [writer] => Aaron Sorkin (screenplay), Ben Mezrich (book)
    [actors] => Jesse Eisenberg, Rooney Mara, Bryan Barter, Dustin Fitzsimons
    [plot] => Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, but is later sued by two brothers who claimed he stole their idea, and the cofounder who was later squeezed out of the business.
    [language] => English, French
    [country] => USA
    [awards] => Won 3 Oscars. Another 102 wins & 86 nominations.
    [poster] => http://ia.media-imdb.com/images/M/MV5BMTM2ODk0NDAwMF5BMl5BanBnXkFtZTcwNTM1MDc2Mw@@._V1_SX300.jpg
    [metascore] => 95
    [imdbrating] => 7.8
    [imdbvotes] => 326,376
    [imdbid] => tt1285016
    [type] => movie
    [rtmeter] => No tomato Meter score available
    [rtimage] => No tomato certification available
    [rtrating] => No RT critics rating available
    [rtreviews] => No tomato review(s) available
    [rtfresh] => No Tomato Fresh ratings found.
    [rtrotten] => No Tomato Rotten ratings found.
    [rtconsensus] => No RT Concensus available.
    [rtusermeter] => No RT User Meter score Available
    [rtuserrating] => No RT User Rating Available.
    [rtuserreviews] => Unknown number of RT User Reviews.
    [rtdvd] => No DVD Release date available.
    [rtboxoffice] => No Box office figure available.
    [rtproduction] => Unknown production company.
    [rtwebsite] => Unknown website for movie.
)

Results for a search: <br>
Array
(
    [0] => omdb_search Object
        (
            [title] => The Lion King
            [year] => 1994
            [imdbid] => tt0110357
            [type] => movie
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

Results for movie3: <br>
omdb_movie Object
(
    [title] => Star Wars: Episode III - Revenge of the Sith
    [year] => 2005
    [rating] => PG-13
    [releasedate] => 19 May 2005
    [runtime] => 140 min
    [genre] => Action, Adventure, Fantasy
    [director] => George Lucas
    [writer] => George Lucas
    [actors] => Ewan McGregor, Natalie Portman, Hayden Christensen, Ian McDiarmid
    [plot] => After three years of fighting in the Clone Wars, Anakin Skywalker falls prey to the Sith Lord's lies and makes an enemy of the Jedi and those he loves, concluding his journey to the Dark Side.
    [language] => English
    [country] => USA
    [awards] => Nominated for 1 Oscar. Another 14 wins & 29 nominations.
    [poster] => http://ia.media-imdb.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_SX300.jpg
    [metascore] => 68
    [imdbrating] => 7.7
    [imdbvotes] => 356,003
    [imdbid] => tt0121766
    [type] => movie
    [rtmeter] => No tomato Meter score available
    [rtimage] => No tomato certification available
    [rtrating] => No RT critics rating available
    [rtreviews] => No tomato review(s) available
    [rtfresh] => No Tomato Fresh ratings found.
    [rtrotten] => No Tomato Rotten ratings found.
    [rtconsensus] => No RT Concensus available.
    [rtusermeter] => No RT User Meter score Available
    [rtuserrating] => No RT User Rating Available.
    [rtuserreviews] => Unknown number of RT User Reviews.
    [rtdvd] => No DVD Release date available.
    [rtboxoffice] => No Box office figure available.
    [rtproduction] => Unknown production company.
    [rtwebsite] => Unknown website for movie.
)

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Either the title or the ID must be filled otherwise there will be no results
