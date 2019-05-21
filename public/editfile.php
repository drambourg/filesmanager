<!doctype html>
<html lang="en">
<?php
require('../src/MyDirectory.php');
require('../src/MyFile.php');
$pathDirectory = 'files/';

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $postData = $_POST;

    $myFile = null;
    if (isset($postData['filepath'])) {
        $myFile = new MyFile($postData['filepath']);
    }
    if (isset($postData['filecontent']) && isset($myFile)) {
        $myFile->setContent($postData['filecontent']);
    }
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css"/>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
            <h3 class="text-uppercase">Edit a secret report</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="card col-md-10 m-1 p-1 justify-content-center text-center border border-light bg-transparent">
                    <img src="assets/images/file.png" class="card-img-top file-logo mx-auto" alt="<?= $myFile->getPath() ?>">
                    <form method="POST">
                        <div class="card-header">
                            <h3><?= $myFile->getPath() ?></h3>
                            <input id="filepath" name="filepath" type="hidden" value="<?= $myFile->getPath() ?>">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="contentFile"><h4>Secret content</h4></label>
                                <textarea class="form-control" id="contentFile" name="filecontent"
                                          rows="15"><?= $myFile->getContent() ?></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Update report</button>
                        </div>
                    </form>
                </div>
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
