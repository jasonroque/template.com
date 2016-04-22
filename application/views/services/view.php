<div class="col-md-9">
    <div class="service-wrapper">
        <?php foreach($one_service['content'] as $content): ?>
        <div class="col-sm-6 col-md-12 service-content">
            <div class="col-md-push-6 col-md-6">
                <img class="img-responsive center-block" src="<?php if(isset($content['image']) && $content['image'] !== '') { ?>/assets/images/services/<?php echo $content['img']; } else { ?>http://placehold.it/960x420<?php } ?>"/>
            </div>
            <div class="col-md-pull-6 col-md-6">
                <h3><?php echo $content['subject'] ?></h3>
                <p><?php echo $content['body'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
<!-- endof Services -->