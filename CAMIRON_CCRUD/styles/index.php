<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERON | CREAT STYLES</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include '../config/navbar.php'; ?>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <form method="post" action="ctl.creat.php">
                    <h4 class="display-7 text-center">ADD STYLE</h4>
                    <hr><br>
                    <?php if (isset($_GET['error'])) {  ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error']; ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="style_name">STYLE</label>
                        <input type="text" id="style_name" name="style_name" class="form-control" value="<?php if (isset($_GET['style_name']))echo ($_GET['style_name']); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="creat">Envoyer</button>
                    <a href="view.read.php" class="link-primary">view</a>
                </form>
            </section>
        </div>
    </main>
</body>

</html>