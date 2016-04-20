<!-- startof Services -->
<div class="container" id="services">
    <div class="row">
        <div class="col-md-3">
            <div class="btn-group-vertical nav nav-tabs" role="tablist">
                <a href="/services" class="btn btn-lg btn-default active">
                    <h4>All Services</h4>
                </a>
                <?php foreach($services as $service): ?>
                <a href="/services/<?php echo $service['slug'] ?>" class="btn btn-lg btn-default">
                    <h4><?php echo $service['title']; ?></h4>
                </a>
                <?php endforeach; ?>
            </div>
        </div>