<div class="container">
    <img src="<?php if (isset($news_item['img']) && $news_item['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive" />
    <span class="date-published"><?php echo $news_item['date_published']; ?></span>
    <h2><?php echo $news_item['title']; ?></h2>
    <p><?php echo $news_item['paragraph']; ?></p>
</div>