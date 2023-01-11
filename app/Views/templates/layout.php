<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0">

    <?php
    helper('html');
    echo link_tag('assets/css/style.css');
    ?>

    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta ?? '' ?>">
    <noscript>
        <h5 class="text-white bg-danger p-6 m-0 text-center">Bitte aktivieren Sie Javascript in ihrem Browser, um den vollen Funktionsumfang der Seite nutzen zu können!</h5>
    </noscript>

</head>

<body>

    <div id="header">
        <div class="container"></div>
    </div>

    <div class="container px-3 " id="content">
        <?= $this->renderSection('content') ?>
    </div>

    <div id="footer">
        <div class="container"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>