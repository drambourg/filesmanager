<!doctype html>
<html lang="en">
<?php
require('../src/MyDirectory.php');
require('../src/MyFile.php');
$pathDirectory = 'files/' ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css"/>
    <title>FBI | X-Files archives</title>
</head>
<body class="bg-dark">
<div class="container-fluid p-0">
    <div class="jumbotron jumbotron-fluid back-jumbo">
        <div class="container">
            <h1>FBI | X-Files archives</h1>
            <h3>The true is out There...</h3>
        </div>
    </div>

    <div class="card bg-transparent border border-light">
        <div class="card-header">
            <h3 class="text-uppercase">UFO's Activities report</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
            <?php
            $directory = new MyDirectory($pathDirectory);
            $files = $directory->getFiles();

            foreach ($files as $file) :
                $myFile = new MyFile($file);

                ?>


                <div class="card col-md-2 m-1 p-1 justify-content-center text-center border border-light bg-transparent">
                    <img src="assets/images/file.png" class="card-img-top file-logo mx-auto" alt="<?= $file ?>">
                    <div class="card-body">
                        <p><a href="#"><?= $myFile->getPath() ?></a></p>
                        <p><?= $myFile->getHumanReadableSize() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="card-footer">
            <em>Classified documents</em>
        </div>
    </div>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
