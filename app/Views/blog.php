<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>


<div class="row">
    <?= $this->include('widgets/sidebar'); ?>
    <!-- zuja: Hier ergen een add aan toevoegen -->
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php
                $db = \Config\Database::connect(); 
                $query = $db->query('SELECT * FROM posts');
                $results = $query->getResult();
            

                foreach ($results as $row) {
            ?>
                    <div class='card col-12 col-sm-6 col-md-4' style='width: 200px;'>
                        <img src='assets/images/Avatar icon.png' class='card-img-top'>
                        <div class='card-body'>
                                <h5 class='card-title'><?= $row->post_title ?></h5>
                                <p class='card-text' style='font-size: 12px'><?= $row->post_content ?><p>
                                <a href='/blog/post/<?= $row->post_id ?>' class='btn btn-primary'>Read more</a>
                                <!-- zuja: Hier een delete en edit aan toevoegen -->
                        </div>
                    </div>
            <?php
                }
            ?>          
        </div>
    </div>
</div>

<?= $this->endSection() ?>