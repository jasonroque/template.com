<div class="container">
    <h2><?php echo $title; ?></h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('news/create'); ?>

        <div class="form-group">
            <label for="title">Title *</label>
            <input type="input" name="title" class="form-control" id="exampleInput">
        </div>
        <div class="form-group">
            <label for="title">Author *</label>
            <input type="input" name="author" class="form-control" id="exampleAuthor">
        </div>
        <div class="form-group">
            <label for="title">Image</label>
            <input type="file" name="img" class="form-control" id="exampleImage">
            <p class="help-block">Please upload a *.jpg, *.png, or *.gif file ONLY</p>
        </div>
        <div class="form-group">
            <label for="text">Paragraph *</label>
            <textarea name="text" class="form-control" rows="5" id="exampleParagraph"></textarea>
        </div>
        <div class="form-group">
            <label for="text">Category</label>
            <input type="input" name="category" class="form-control" id="exampleCategory">
        </div>

        <input class="btn btn-success" type="submit" name="submit" value="Post" />

    </form>
</div>