<div id="page-header">
    <div class="header">
        <div class="container">
            <div class="info">
                <h1>
                    <?php echo $title; ?><br/>
                    <?php if(isset($subtitle)) { ?><small><?php echo $subtitle; ?></small> <?php } ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <?php echo $breadcrumbs; ?>
            </div>
        </div>
    </div>
</div>