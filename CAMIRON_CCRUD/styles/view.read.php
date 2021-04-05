<?php include "ctl.read.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERON | READ STYLE</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include '../config/navbar.php'; ?>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <div class="content">
                    <?php if (isset($_GET['success'])) {  ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_GET['success']; ?>
                        </div>
                    <?php } ?>
                    <h4 class="display-7 text-center">READ STYLES</h4>
                    <?php if (mysqli_num_rows($ruslt)) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">STYLES</th>
                                    <th scope="col">GENRES</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <?php
                            $i = 0;
                            while ($rows = mysqli_fetch_assoc($ruslt)) {
                                $i++;
                            ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $rows['style_name'] ?></td>
                                        <td><?= $rows['genre_name'] ?></td>
                                        <td>
                                            <a href="view.update.php?id=<?= $rows['style_id'] ?>" class="btn btn-success">UPDATE</a>
                                            <a href="ctl.delete.php?id=<?= $rows['style_id'] ?>" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            <?php } ?>
                            <div class="link-right">
                                <a href="index.php" class="link-primary m-3 btn-outline-secondary">CREAT STYLE</a>
                            </div>
                        </table>
                </div>
            </section>
        </div>
    </main>
</body>

</html>