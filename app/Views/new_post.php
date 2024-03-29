<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>
<h1><?= $title ?></h1>

<div class="row">
    <div class="col-12 col-md-8 col-md-2">
        
        <form method="post" action="/blog/new">
            <div class="form-group">
                <label for="">Title</label>
                <input class="form-control" type="text" name="post_title">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" name="post_content" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button href="/blog" class="btn btn-succes btn-sm">Create</button>
            </div>
        </form>
        
    </div>
</div>

<?= $this->endSection() ?>