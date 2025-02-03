<?php

function movie($title, $year)
{
    $type = ($year < 2000) ? "old" : "new";
    echo "Movie: $title, Year: $year, it is an $type movie\n";
}

movie('Inception', 2010);
movie(year: 1997, title: 'Titanic');
movie(year: 2009, title: 'Avatar');
movie(title: 'Interstellar', year: 2014);
movie('The Matrix', year: 1999);
