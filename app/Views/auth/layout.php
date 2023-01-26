<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <?php helper('html'); ?>
    <?= link_tag('assets/css/style.css') ?>

    <?= $this->renderSection('pageStyles') ?>
</head>

<body class="bg-light">

    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
