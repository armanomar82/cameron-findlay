<?php
// echo 'hiiiiii';

if(isset($_GET['id'])){

    include "../config/db_conc.php";


        function validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id  = validation($_GET['id']);

        $sql = "SELECT * FROM `styles` WHERE `style_id` = $id ";

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

        $style_name = validation($_POST['style_name']);
        $id = validation($_POST['style_id']);


        if (empty($style_name)) {

            header('Location: view.update.php?id=$id&error=style_name is rquired');

        } else {


        $sql2 = "UPDATE styles
                    SET style_name = '$style_name'
                    WHERE  style_id = '$id' ";

            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
            
                header('Location: view.read.php?success=successfully updated');

            } else {

                header('Location: view.update.php?error=unknown error occured&$style_data');
            
            }
        }

    }else{

        header('Location: view.read.php');
    }