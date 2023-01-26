<?= $this->section('title') ?>
<?= lang('Migrate') ?>
<?= $this->endSection() ?>

<?php
echo $this->extend('templates/layout');
echo $this->section('main');
helper('html');
?>

<h1 class="pt-3">Migrations</h1>

<p>
    Migrations found:
</p>
<?php if (isset($migrations)): ?>
    <p><?= !d($migrations ?? null) ?></p>
    <p>
        Running Migrations... <?= '<b>' .
        	($success ? 'Migration successful!' : 'Migration failed!') .
        	'<b>' ?>
    </p>
    <?php if (isset($errors)): ?>
        <p><?= d($errors ?? null) ?></p>
    <?php endif; ?>
<?php else: ?>
    <p class="fst-italic">None</p>
<?php endif; ?>

<h2 class="pt-5">Migration History:</h2>
<?php if (isset($migrationHistory)): ?>
    <p><?= !d($migrationHistory ?? null) ?></p>
<?php endif; ?>


<?= $this->endSection() ?>
