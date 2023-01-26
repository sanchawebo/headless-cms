<?= $this->section('title') ?>
<?= ucfirst('@:@') . ' | ' . SITE_NAME ?>
<?= $this->endSection() ?>
<!-- Change the html-title in the above section. -->

<?php
echo $this->extend('templates/layout');
echo $this->section('main');
helper('html');
?>

<!-- Insert site code here. -->

<?= $this->endSection() ?>

<?= $this->section('pageScripts') ?>
<?= $this->endSection() ?>
<!-- Write or import specific JS-Code in the above section. -->
