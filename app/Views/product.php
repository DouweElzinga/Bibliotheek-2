<?= $this->extend('layouts/main'); ?>

<?= $this->section('content') ?>

    <!-- zuja: onderstaande variabele is doorgegeven via $data['test'] -->
    <?= $test ?> 

<?= $this->endSection() ?>