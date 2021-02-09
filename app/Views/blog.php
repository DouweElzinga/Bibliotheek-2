<h1><?= $title ?></h1>




<div>
    <?php foreach($posts as $post) : ?> 

        <div>
            <h3><?= $post ?></h3>
            <img src="assets/images/Avatar icon.png" style="width: 100px; height: auto;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odio a quae expedita quasi quibusdam consequatur consectetur. A, nam dolorem sunt accusamus sapiente exercitationem repudiandae illo, facere, quae commodi repellendus!</p>
        </div>
    <?php endforeach; ?>
</div>