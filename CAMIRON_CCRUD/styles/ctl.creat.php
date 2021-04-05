<?php 

        if(isset($_POST['creat'])){

        include "../config/db_conc.php";

            function validation($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $style_name = validation($_POST['style_name']);
            $genre_name = validation($_POST['genre_name']);


            $style_data = 'style_name = '. $style_name ;

            if(empty($style_name)){

                header('Location: index.php?error=style_name is rquires&$style_data');

            }else{

                $sql = "INSERT INTO
                        styles(style_name)
                        VALUE('$style_name') ";
                
                $result = mysqli_query($conn, $sql);

                if($result){

                $sql2 = "INSERT INTO
                        genres(genre_name)
                        VALUE('$genre_name') ";

                $result2 = mysqli_query($conn, $sql2);

                    header('Location: view.read.php?success=successfully created');

                }else{
                    header('Location: index.php?error=unknown error occured&$style_data');
                }
            }
        }