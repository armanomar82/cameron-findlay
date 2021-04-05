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

        $sql = "SELECT * FROM `genres` WHERE `genre_id` = $id ";

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

        $genre_name = validation($_POST['genre_name']);
        $id = validation($_POST['genre_id']);


        if (empty($genre_name)) {

            header('Location: view.update.php?id=$id&error=genre_name is rquired');

        } else {


        $sql2 = "UPDATE genres
                    SET genre_name = '$genre_name'
                    WHERE  genre_id = '$id' ";

// var_dump($sql2);
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
            
                header('Location: view.read.php?success=successfully updated');

            } else {

                header('Location: view.update.php?error=unknown error occured&$genre_data');
            
            }
        }

    }else{

        header('Location: view.read.php');
    }