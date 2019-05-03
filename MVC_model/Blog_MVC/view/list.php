<p>
    <a href="index.php?page=add" class="btn btn-primary">Create new post</a>
</p>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <h2><a href="index.php?page=view&id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h2>
            <span><?php echo $post->created; ?></span>
            <p><?php echo $post->teaser; ?></p>
            <a href="index.php?page=edit&id=<?php echo $post->id; ?>" class="btn btn-primary btn-sm">Update</a>
            <a href="index.php?page=delete&id=<?php echo $post->id; ?>" class="btn btn-warning btn-sm">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>