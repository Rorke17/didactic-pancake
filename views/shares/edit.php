<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Post</h3>
  </div>
  <div class="panel-body">
    <?php if(true) : ?>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <?php foreach($viewModel as $item) : ?>
    	<div class="form-group">
    		<label>Edit Title</label>
    		<input type="text" name="title" class="form-control" value="<?php echo $item['title']; ?>" />
    	</div>
    	<div class="form-group">
    		<label>Edit Body</label>
    		<textarea name="body" class="form-control"><?php echo $item['title']; ?></textarea>
    	</div>
    	<div class="form-group">
    		<label>Edit Link</label>
    		<input type="text" name="link" class="form-control" value="<?php echo $item['title']; ?>" />
    	</div>
    	<input class="btn btn-primary" name="update" type="submit" value="Update" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
        <?php endforeach; ?>
    </form>
  <?php endif; ?>
  <?php if(isset($_SESSION['delete'])) : ?>
    <form method="post" action="<?php echo ROOT_URL; ?>shares/delete">
      <label>Do you want to delete post?</label>
      <input type="hidden" name='shared_id' value="<?php echo $item['id']; ?>" />
      <input class="btn btn-warning" name="delete" type="submit" value="Delete" />
    </form>
  <?php endif; ?>
  </div>
</div>
