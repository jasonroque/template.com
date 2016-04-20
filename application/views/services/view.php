<div class="col-md-9">
    <div class="service-content">
        <?php foreach($one_service['content'] as $content): ?>
        <div class="col-md-6">
            <img class="img-responsive center-block" src="<?php if(isset($content['image']) && $content['image'] !== '') { ?>/assets/images/services/<?php echo $content['img']; } else { ?>http://placehold.it/840x420<?php } ?>"/>
            <h3><?php echo $content['subject'] ?></h3>
            <p><?php echo $content['body'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
<!-- endof Services -->