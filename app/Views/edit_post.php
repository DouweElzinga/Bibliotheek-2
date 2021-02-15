<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>
<h1><?= $title ?></h1>
<?php // var_dump($post)?>
<div class="row">
    <div class="col-12 col-md-8 col-md-2">
        
        <form method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input class="form-control" type="text" name="post_title" value="<?= $post['post_title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" name="post_content" rows="3"><?= $post['post_content'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Edit</button>
            </div>
        </form>
        
    </div>
</div>

<?= $this->endSection() ?>