<div class="col-md-9" id="all-services">
    <?php foreach ($services as $service): ?>
        <div class="col-sm-6 col-md-6">
            <div class="service-wrapper">
                <a href="/services/<?php echo $service['slug']; ?>">
                    <img class="img-responsive center-block" src="http://placehold.it/960x420" />
                </a>
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