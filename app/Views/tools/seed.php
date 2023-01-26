<?= $this->section('title') ?>
<?= ucfirst('seeding') ?>
<?= $this->endSection() ?>
<!-- Change the html-title in the above section. -->

<?php
echo $this->extend('templates/layout');
echo $this->section('main');
helper('html');
?>

<h1>Seeding...
    <?php if ($success === true) : ?>
        Success!</h1>
<?php else : ?>
    Failed!</h1>
    <p>Message:</p>
    <p class="mb-3"><?= $message ?? '' ?></p>
    <p>Trace:</p>
    <p><?= !d($trace) ?></p>
<?php endif; ?>

<?= $this->endSection() ?>

<?= $this->section('pageScripts') ?>
<?= $this->endSection() ?>
<!-- Write or import specific JS-Code in the above section. -->