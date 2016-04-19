<div class="container" id="featured">
    <div class="row">
        <?php foreach ($featured_news as $featured): ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <div class="top">
                        <a href="<?php echo '/news/' . $featured['slug']; ?>">
                            <img src="<?php if (isset($featured['img']) && $featured['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive center-block" />
                        </a>
                        <span class="date-published"><?php echo $featured['date_published'] = date("M j Y"); ?></span>
                    </div>
                    <div class="caption">
                        <h3><?php echo $featured['title'] ?> <small>by <?php echo $featured['author']; ?></small></h3>
                        <p>
                            <?php echo substr($featured['paragraph'], 0, 200); ?><?php if (strlen($featured['paragraph']) >= 200) { ?>...<?php } ?> 
                            <a href="<?php echo '/news/' . $featured['slug']; ?>">Read More</a>
                        </p>
                    </div>
                    <div class="info">
                        <ul>
                            <li><a href="">0 Comments</a></li>
                            <!--<li><a href=""><?php echo $featured['category'];?></a></li>-->
                            <li>
                                <ul>
                                    <?php $categories = explode('|', $featured['category']); ?>
                                    <?php foreach($categories as $category): ?>
                                    <li><a href=""><?php echo $category;?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>