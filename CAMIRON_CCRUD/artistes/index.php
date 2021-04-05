
 <?php

    include "../config/db_conc.php";


    $sql =   "SELECT * FROM `styles`";
    

    $option = mysqli_query($conn, "SELECT * FROM styles");




    if (isset($_POST['creat'])) {

        function validation($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $style_id                 =  validation($_GET['id']);
        $artiste_name       =  validation($_POST['artiste_name']);
        $style_name         =  validation($_POST['style_name']);
        $artiste_data       = 'artiste_name = ' . $artiste_name;



        $sql = "SELECT * FROM styles WHERE style_id = $id ";



        if (empty($artiste_name )) {

            header('Location: index.php?error=artiste_name is rquires&$artiste_data');
        // insert data to database
        }else{

            $sql = "INSERT INTO
                            artistes (artiste_name,style_name) 
                    VALUES ('$artiste_name', '$style_name')";

            $result = mysqli_query($conn, $sql);

            if ($result) {

                header('Location: view.read.php?success=successfully created');
            } else {
                header('Location: index.php?error=unknown error occured&$$artiste_data');
            }
        }

    

        // mysqli_close($conn);
    }


    ?>
 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CAMERON | CREAT ARTISTES</title>
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>

 <body>
     <?php include '../config/navbar.php'; ?>
     <main class="container">
         <div class="row">
             <section class="col-12">
                 <!-- <form method="post" action="ctl.creat.php"> -->
                 <form method="post">
                     <h4 class="display-7 text-center">CREAT ARTISTES</h4>
                     <hr><br>
                     <?php if (isset($_GET['error'])) {  ?>
                         <div class="alert alert-danger" role="alert">
                             <?= $_GET['error']; ?>
                         </div>
                     <?php } ?>
                     <div class="form-group">
                         <label for="artiste_name">ARTISTES</label>
                         <input type="text" id="artiste_name" name="artiste_name" class="form-control" value="<?php if (isset($_GET['artiste_name'])) echo ($_GET['artiste_name']); ?>">
                     </div>
                     <div class="form-group">

                         <select class="form-control" name="country">

                             <option>Please select style</option>

                             <?php foreach ($option as $key => $value) { ?>

                                 <option value="<?= $value['style_name']; ?>"><?= $value['style_name']; ?></option>

                             <?php } ?>

                         </select>

                     </div>

                     <button type="submit" class="btn btn-primary" name="creat">CREAT</button>
                     <a href="view.read.php" class="link-primary">view</a>
                 </form>
             </section>
         </div>
     </main>
 </body>

 </html>