<?php include "ctl.update.php";  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERON | UPDATE ARTISTES</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include '../config/navbar.php'; ?>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <form method="post" action="ctl.update.php">
                    <h4 class="display-7 text-center">UPDATE ARTISTE</h4>
                    <hr><br>
                    <?php if (isset($_GET['error'])) {  ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error']; ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="artiste_name">ARTISTE</label>
                        <input type="text" id="artiste_name" name="artiste_name" class="form-control" value="<?= $row['artiste_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="style_name">STYLE</label>
                        <input type="text" id="style_name" name="style_name" class="form-control" value="<?= $row['style_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="genre_name">GENRE</label>
                        <input type="text" id="genre_name" name="genre_name" class="form-control" value="<?= $row['genre_name']; ?>">
                    </div>
                    <input type="text" name="artiste_id" value="<?= $row['artiste_id']; ?>" hidden>
                    <input type="text" name="style_id" value="<?= $row['style_id']; ?>" hidden>
                    <input type="text" name="genre_id" value="<?= $row['genre_id']; ?>" hidden>
                    <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
                    <a href="view.read.php" class="link-primary">view</a>
                </form>
            </section>
        </div>
    </main>
</body>

</html>