<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>

<!-- zuja: ik denk dat dit veel dingen wat duidelijker maakt, in elk geval overzichtelijker. -->
<div class="row">
    <?= $this->include('widgets/sidebar'); ?>
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php foreach ($results as $row): ?> <!-- : mag ook vervangen worden een { -->
                <div class='card col-12 col-sm-6 col-md-4' style='width: 200px;'>
                    <img src='assets/images/Avatar icon.png' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'><?= $row->post_title ?></h5>
                        <p class='card-text' style='font-size: 12px'><?= $row->post_content ?></p>
                        <a href='/blog/post/<?= $row->post_id ?>' class='btn btn-primary'>Read more</a>
                    </div>
                </div>
            <?php endforeach; ?> <!-- endforeach; mag ook vervangen worden een } -->        
        </div>
    </div>
</div>

<?= $this->endSection() ?>