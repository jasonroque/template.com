<div class="col-md-9">
    <?php foreach ($services as $service): ?>
        <div class="col-md-6">
            <div class="service-content">
                <img class="img-responsive center-block" src="http://placehold.it/840x420" />
                <h3><?php echo $service['title'] ?></h3>
                <p><?php echo $service['description'] ?></p>
                <a href="/services/<?php echo $service['slug']; ?>" class="btn btn-default">Read More >></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
</div>
<!-- endof Services -->