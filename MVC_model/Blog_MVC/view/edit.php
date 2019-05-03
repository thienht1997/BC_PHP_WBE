<h2>Edit post</h2>
<form method="post" action="index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $post->title; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control"><?php echo $post->teaser; ?></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"><?php echo $post->content; ?></textarea>
    </div>
    <div class="form-group">
        <label>Created</label>
        <input type="date" name="created" value="<?php echo $post->created;?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>