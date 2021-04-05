<?php

    if(isset($_GET['id'])){

        include "../config/db_conc.php";

        function validation($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id  = validation($_GET['id']);

        $sql = "DELETE FROM artistes
                        WHERE  artiste_id = '$id' ";

        // var_dump($sql2);
        $result = mysqli_query($conn, $sql);

        if ($result) {

            header('Location: view.read.php?success=successfully delete');
        } else {

            header('Location: view.read.php?error=unknown error occured&$artiste_data');
        }


    }else{

        header('Location: view.read.php');

    }