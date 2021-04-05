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

        $sql1 = "DELETE FROM styles
                        WHERE  style_id = '$id' ";

        // var_dump($sql2);
        $result2 = mysqli_query($conn, $sql1);

        if ($result2) {

            header('Location: view.read.php?success=successfully delete');
        } else {

            header('Location: view.read.php?error=unknown error occured&$style_data');
        }


    }else{

        header('Location: view.read.php');

    }