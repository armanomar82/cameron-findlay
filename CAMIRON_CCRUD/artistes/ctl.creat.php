<?php







// if(isset($_POST['creat'])){
    
//     include "../config/db_conc.php";
   

//     function validation($data){
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }

//     $artiste_name = validation($_POST['artiste_name']);


//     $artiste_data = 'artiste_name = '. $artiste_name ;

//     if(empty($artiste_name)){

//         header('Location: index.php?error=artiste_name is rquires&$artiste_data');

//     }else{

//         $sql = "INSERT INTO
//                 artistes(artiste_name)
//                 VALUE('$artiste_name') ";

//         $result = mysqli_query($conn, $sql);

//         if($result){


//             header('Location: view.read.php?success=successfully created');

//         }else{
//             header('Location: index.php?error=unknown error occured&$$artiste_data');
//         }
//     }




//         // $sql = " SELECT * FROM `styles`  ORDER BY style_id DESC";
//         var_dump($sql);
   

//         if($result = mysqli_query($conn, $sql)){

//             if(mysqli_num_rows($result) > 0){

//                 while($row = mysqli_fetch_array($result) ){

//                     echo $row['styles'];

//                 }

//             }
//         }


// }