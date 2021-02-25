<?= $this->extend('layouts/main'); ?>


<?= $this->section('content'); ?>


<div class="row">
    <?= $this->include('widgets/sidebar'); ?>
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php
                $db = \Config\Database::connect(); 
                $query = $db->query('SELECT * FROM posts');
                $results = $query->getResult();
            

                 foreach ($results as $row) {
                    echo "<div class='card col-12 col-sm-6 col-md-4' style='width: 200px;'>";
                        echo "<img src='assets/images/Avatar icon.png' class='card-img-top'>";
                        echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>" . $row->post_title . "</h5>";
                                echo "<p class='card-text' style='font-size: 12px'>" . $row->post_content . "<p>";
                                echo "<a href='/blog/post/" . $row->post_id . "' class='btn btn-primary'>Read more</a>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>          
        </div>
    </div>
</div>

<?= $this->endSection() ?>