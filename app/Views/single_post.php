<?= $this->extend('layouts/main'); ?>

<?= $this->section('content') ?>
    <h1><?= (isset($post))?$post['post_title']:'no record set'; ?></h1>
    <?php if(isset($post)): ?>
        <p><?= $post['post_content'] ?></p>

        <a href="/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
        <a href="/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">edit</a>
    <?php endif; ?>

<?= $this->endSection() ?>