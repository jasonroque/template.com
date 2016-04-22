<div id="news-one">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php if (isset($featured['img']) && $featured['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive" />
                <article>
                    <span class="date-published"><?php echo $featured['date_published'] = date("F d Y"); ?></span>
                    <h2><?php echo $featured['title']; ?></h2>
                    <div class="body">
                        <?php echo $featured['paragraph']; ?>
                    </div>

                    <div class="info">
                        <ul>
                            <li>by <?php echo $featured['author'] ?></li>
                            <li><a href="">0 Comments</a></li>
                            <li>
                                <ul>
                                    <?php foreach (explode('|', $featured['category']) as $category): ?>
                                        <li><a href="/news/category/<?php echo str_replace(' ', '-', strtolower($category)) ?>"><?php echo $category; ?></a></li>    
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-md-3" id="side-nav">
                <div id="similar">
                    <h3>Similar Posts</h3>
                    <div class="btn-group-vertical">
                        <?php foreach ($similar as $sim): ?>
                            <a href="/news/<?php echo $sim['slug']; ?>" class="btn btn-lg btn-default">
                                <h4><?php echo $sim['title'] ?></h4>
                                <p><?php echo date('F d Y' , strtotime($sim['date_published'])) ?></p>
                            </a>
                        <?php endforeach; ?>
                        <a href="/news" class="btn btn-lg btn-default" id="more-stuff">More News</a>
                    </div>
                </div>
                <div id="categories">
                    <h3>Categories</h3>
                    <ul>
                        <?php foreach ($category_list as $category): ?>
                            <li><a href="/news/category/<?php echo str_replace(' ', '-', strtolower($category)) ?>"><?php echo $category; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>