<?= $this->extend('layouts/main'); ?>

<?= $this->section('content') ?>
    <h1><?= $title ?></h1>
    <p><?= $content ?></p>

<a href="/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
<a href="/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">edit</a>


<?= $this->endSection() ?>