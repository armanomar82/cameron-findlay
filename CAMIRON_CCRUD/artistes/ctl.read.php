<?php

    include "../config/db_conc.php";

// $sql = "SELECT * FROM artistes ORDER BY artiste_id DESC";

// $sql = 'SELECT *
//         FROM artistes
//         LEFT JOIN artistestyle
//         ON artistes.artiste_id = artistestyle.artiste
//         LEFT JOIN styles
//         ON artistestyle.style = styles.style_id
//         LEFT JOIN genres
//         ON styles.style_genre_id = genres.genre_id';

$sql = 'SELECT 
                    artistes.artiste_id, 
                    artistes.artiste_name,
                    styles.style_id,  
                    styles.style_name,
                    genres.genre_id,
                    genres.genre_name
            FROM 
                    artistes
            LEFT JOIN 
                    artistestyle
            ON 
                    artistes.artiste_id = artistestyle.artiste
            LEFT JOIN 
                    styles
            ON 
                    artistestyle.style = styles.style_id
            LEFT JOIN 
                    genres
            ON 
                    styles.style_genre_id = genres.genre_id';

    $ruslt = mysqli_query($conn, $sql);