<?php

    include "../config/db_conc.php";

    $sql = "SELECT * FROM genres ORDER BY genre_id DESC";

    $ruslt = mysqli_query($conn, $sql);