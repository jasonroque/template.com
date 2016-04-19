<div id="news-one">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php if (isset($featured['img']) && $featured['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive" />
                <article>
                    <span class="date-published"><?php echo $featured['date_published'] = date("F d Y"); ?></span>
                    <h2><?php echo $featured['title']; ?></h2>
                    <p><?php echo $featured['paragraph']; ?></p>
                </article>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</div>