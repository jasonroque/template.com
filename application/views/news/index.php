<div class="container" id="featured">
    <div class="row">
        <?php foreach ($featured_news as $featured): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo '/news/' . $featured['slug']; ?>">
                        <img src="<?php if (isset($featured['img']) && $featured['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive center-block" />
                    </a>
                    <span class="date-published"><?php echo $featured['date_published'] = date("M j Y"); ?></span>
                    <div class="caption">
                        <h3><?php echo $featured['title'] ?></h3>
                        <p>
                            <?php echo substr($featured['paragraph'], 0, 200); ?><?php if (strlen($featured['paragraph']) >= 200) { ?>...<?php } ?> 
                            <a href="<?php echo '/news/' . $featured['slug']; ?>">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>