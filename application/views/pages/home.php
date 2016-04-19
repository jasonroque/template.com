<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner" role="listbox">
        <?php foreach ($carousel as $slide): ?>
            <div class="item <?php if ($slide['id'] == 0) { ?> active <?php } ?>">
                <img src="/assets/images/carousel/<?php echo $slide['img'] ?>" alt="" />
                <div class="carousel-caption">
                    <div class="container">
                        <h3><?php echo $slide['sub_caption'] ?></h3>
                        <h1><?php echo $slide['caption'] ?></h1>
                        <p><?php echo $slide['description'] ?></p>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="#<?php echo $slide['link1']; ?>" class="btn btn-lg btn-link"><?php echo $slide['link1Name'] ?></a>
                            <a href="#<?php echo $slide['link2']; ?>" class="btn btn-lg btn-more"><?php echo $slide['link2Name'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="contact-info">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
        <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-push-8 col-lg-2">
        <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-pull-2 col-lg-2">
        <a href="#">
            <dl class="dl-horizontal">
                <dt><i class="fa fa-phone fa-3x"></i></dt>
                <dd><h4><small>Phone Number:</small><br/>1-800-888-8888</h4></dd>
            </dl>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-pull-2 col-lg-2">
        <a href="#">
            <dl class="dl-horizontal">
                <dt><i class="fa fa-clock-o fa-3x"></i></dt>
                <dd><h4><small>Hours of Operation:</small><br/>Mon-Sat: 0:00-23:00</h4></dd>
            </dl>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-pull-2 col-lg-2">
        <a href="#">
            <dl class="dl-horizontal">
                <dt><i class="fa fa-envelope-o fa-3x"></i></dt>
                <dd><h4><small>Email:</small><br/>email@email.com</h4></dd>
            </dl>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-pull-2 col-lg-2">
        <ul id="social">
            <li><a href="#"><i class="fa fa-twitter-square fa-3x"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-square fa-3x"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
        </ul>
    </div>
</div>

<div class='jumbotron' id='who-we-are'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-6'>
                <h2>Who are we?</h2>
                <h1 class="header">Lorem ipsum dolor sit amet</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                    Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.
                </p>
            </div>
            <div class='col-lg-6'>
                <div class="col-md-6 col-lg-12">
                    <div class="row">
                        <h3>Who are we?</h3>
                        <h2 class="header">Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                            Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-12">
                    <div class="row">
                        <h3>Who are we?</h3>
                        <h2 class="header">Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                            Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="product-list">
    <div class="nav nav-tabs" role="tablist">
        <div class="container">
            <div class="col-sm-6 col-md-3 active" role="presentation">
                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                    <i class="fa fa-circle-o-notch fa-3x"></i>
                    <h2>Lorem ipsum dolor</h2>
                    <img class="img-responsive" src="/assets/images/featured/cover-01.jpg" />
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                    <i class="fa fa-circle-o-notch fa-3x"></i>
                    <h2>Lorem ipsum dolor</h2>
                    <img class="img-responsive" src="/assets/images/featured/cover-02.jpg" />
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                    <i class="fa fa-circle-o-notch fa-3x"></i>
                    <h2>Lorem ipsum dolor</h2>
                    <img class="img-responsive" src="/assets/images/featured/cover-03.jpg" />
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                    <i class="fa fa-circle-o-notch fa-3x"></i>
                    <h2>Lorem ipsum dolor</h2>
                    <img class="img-responsive" src="/assets/images/featured/cover-04.jpg" />
                </a>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
            <div class="container">
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-2">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab2">
            <div class="container">
                <div class="pane-content col-xs-4 col-sm-4 col-md-4">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-4">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-4 col-sm-4 col-md-4">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab3">
            <div class="container">
                <div class="pane-content col-xs-6 col-sm-3 col-md-3">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-6 col-sm-3 col-md-3">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-6 col-sm-3 col-md-3">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-6 col-sm-3 col-md-3">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab4">
            <div class="container">
                <div class="pane-content col-xs-6 col-sm-6 col-md-6">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
                <div class="pane-content col-xs-6 col-sm-6 col-md-6">
                    <a href="">
                        <h4>Lorem ipsum dolor</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="featured">
    <div class="row">
        <?php foreach ($featured_news as $featured): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="top">
                        <a href="<?php echo '/news/' . $featured['slug']; ?>">
                            <img src="<?php if (isset($featured['img']) && $featured['img'] !== '') { ?>/assets/images/featured/<?php echo $featured['img'] ?><?php } else { ?>http://placehold.it/840x420<?php } ?>" class="img-responsive center-block" />
                        </a>
                        <span class="date-published"><?php echo $featured['date_published'] = date("M j Y"); ?></span>
                    </div>
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
        <div class="col-sm-12 col-md-4">
            <div class="btn-group-vertical" role="group">
                <?php foreach ($other_news as $other): ?>
                    <a href="<?php echo '/news/' . $other['slug']; ?>" class="btn btn-lg btn-default">
                        <h4><?php echo $other['title'] ?></h4>
                        <h5><?php echo substr($other['paragraph'], 0, 45) . "..."; ?></h5>
                        <p><?php echo $other['date_published'] = date("M j Y"); ?></p>
                    </a>
                <?php endforeach; ?>
                <a href="/news" class="btn btn-lg btn-default" id="more-stuff">
                    <h3>More News</h3>
                </a>
            </div>
        </div>
    </div>
</div>