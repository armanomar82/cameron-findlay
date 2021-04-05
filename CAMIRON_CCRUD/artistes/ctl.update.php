<?php

if(isset($_GET['id'])){

        include "../config/db_conc.php";

        function validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id  = validation($_GET['id']);
        // $id  = validation($_GET['artiste_id']);
        // $id  = validation($_GET['style_id']);
        // $id  = validation($_GET['genre_id']);

        $sql = "SELECT * FROM `artistes` WHERE `artiste_id` = $id ";

        // $sql = 'SELECT 
        //             artistes.artiste_id, 
        //             artistes.artiste_name,
        //             styles.style_id,  
        //             styles.style_name,
        //             genres.genre_id,
        //             genres.genre_name
        //     FROM 
        //             artistes
        //     LEFT JOIN 
        //             artistestyle
        //     ON 
        //             artistes.artiste_id = artistestyle.artiste
        //     LEFT JOIN 
        //             styles
        //     ON 
        //             artistestyle.style = styles.style_id
        //     LEFT JOIN 
        //             genres
        //     ON 
        //             styles.style_genre_id = genres.genre_id';

        

        $reuslt = mysqli_query($conn, $sql);

        if(mysqli_num_rows($reuslt) > 0){

            $row = mysqli_fetch_assoc($reuslt);

        }else{

            header('Location: view.read.php');

        }

    }else if(isset($_POST['update'])){

    include "../config/db_conc.php";

    function validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        $artiste_name = validation($_POST['artiste_name']);
        $style_name = validation($_POST['style_name']);
        $genre_name = validation($_POST['genre_name']);
        $artiste_id = validation($_POST['artiste_id']);
        $style_id = validation($_POST['style_id']);
        $genre_id = validation($_POST['genre_id']);


        if (empty($artiste_name)) {

            header('Location: view.update.php?id=$id&error=artiste_name is rquired');

        } else {


        $sql = "UPDATE artistes
                    SET artiste_name = '$artiste_name'
                    WHERE  artiste_id = '$artiste_id' ";
        // $sql2 = "UPDATE artistes
        //                 INNER JOIN artistestyle ON artistestyle.artiste = artistes.artiste_id
        //                 INNER JOIN styles ON artistestyle.style = styles.style_id
        //                 INNER JOIN genres ON styles.style_genre_id = genres.genre_id
        //                 SET artistes.artiste_name = '$artiste_name',
        //                     styles.style_name = '$style_name',
        //                     genres.genre_name  = '$genre_name'
        //                 WHERE   artistes.artiste_id = '$artiste_id,'
        //                         styles.style_id ='$style_id',
        //                         genres.genre_id = $genre_id ";

            $result = mysqli_query($conn, $sql);

            if ($result) {

            
                header('Location: view.read.php?success=successfully updated');

            } else {

                header('Location: view.update.php?error=unknown error occured&artiste_data');
            
            }
        }

    }else{

        header('Location: view.read.php');
    }