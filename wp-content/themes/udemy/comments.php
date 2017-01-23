<?php foreach ($comments as $comment): ?>
    <h4><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>
    <div class="comment-body">
         <p><?php comment_text(); ?></p>
    </div>
<?php endforeach; ?>

<?php if (comments_open()): ?>
    <h4>Leave a Comment</h4>
    <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="POST" id="commentform">
        <input type="hidden" name="comment_post_ID" value="<?= $post->ID; ?>" id="comment_post_ID">
        <div class="form-group">
            <label for="name">Name (*)</label>
            <input type="text" id="author" name="author" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="website">Website (optional)</label>
            <input type="text" id="website" name="website" class="form-control">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea type="text" id="comment" name="comment" class="form-control" required="true"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>
    </form>
<?php else: ?>
    <?php _e('Comments are closed', 'udemy'); ?>
<?php endif; ?>
