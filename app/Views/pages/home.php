<?= $this->section('title') ?>
<?= ucfirst('Home') . ' | ' . SITE_NAME ?>
<?= $this->endSection() ?>

<?php
echo $this->extend('templates/layout');
echo $this->section('main');
?>

<div class="container bg-white border border-secondary">
    <h1>Home</h1>
</div>

<?= $this->endSection() ?>

<?= $this->section('pageScripts') ?>
<script>
    console.log('TEST');
</script>
<?= $this->endSection() ?>
