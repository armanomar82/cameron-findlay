<?php 

        if(isset($_POST['creat'])){

            include "../config/db_conc.php";

            function validation($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $genre_name = validation($_POST['genre_name']);

            $genre_data = 'genre_name = '. $genre_name ;

            if(empty($genre_name)){

                header('Location: index.php?error=genre_name is rquires&$genre_data');

            }else{

                $sql = "INSERT INTO
                        genres(genre_name)
                        VALUE('$genre_name') ";
                
                $result = mysqli_query($conn, $sql);

                if($result){

                    header('Location: view.read.php?success=successfully created');

                }else{
                    header('Location: index.php?error=unknown error occured&$genre_data');
                }
            }
        }