<h2>Create new post</h2>
<?php
    if(isset($message)){
        echo "<p class='alert-info'>$message</p>";
    }
?>
<form method="post" action="index.php?page=add">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Created</label>
        <input type="date" name="created" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>