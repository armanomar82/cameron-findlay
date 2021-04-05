<?php

    include "../config/db_conc.php";

    // $sql = "SELECT * FROM styles ORDER BY style_id DESC";


    $sql = 'SELECT
        s.style_id, 
        s.style_name, 
        g.genre_name
    FROM 
        `styles`s 
    LEFT JOIN
        `genres`g
    ON 
        s.style_genre_id = g.genre_id
    ORDER BY 
        style_id DESC';

    $ruslt = mysqli_query($conn, $sql);