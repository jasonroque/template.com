<style type="text/css">
    .red {color: red;}
</style>

<div class="container" id="create-news">
    <h2><?php echo $title; ?></h2>

    <div class="row">
        <div class="col-md-9">
            <?php echo validation_errors(); ?>
        </div>
    </div>

    <?php echo form_open_multipart('news/create'); ?>
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="title">Title <span class="red">*</span></label>
                <input type="input" name="title" class="form-control" id="exampleInput">
            </div>
            <div class="form-group">
                <label for="title">Author <span class="red">*</span></label>
                <input type="input" name="author" class="form-control" id="exampleAuthor">
            </div>

            <div class="form-group">
                <label for="text">Paragraph <span class="red">*</span></label>
                <textarea name="text" class="form-control" rows="5" id="exampleParagraph"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" name="filename" class="form-control" id="exampleImage">
                <p class="help-block">Please upload a *.jpg, *.png, or *.gif file ONLY</p>
                <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="text">Category</label>
<!--                <input type="input" name="category" class="form-control" id="exampleCategory">-->
                <?php foreach ($category_list as $category): ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="category[]" value="<?php echo $category; ?>" />
                            <?php echo $category; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
                <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> New Category</button>
            </div>
        </div>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="Post" />
    
<?php echo form_close(); ?>

<?php if (isset($success_msg)) { echo $success_msg; } ?>
</div>