<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Post</h3>
  </div>
  <div class="panel-body">
    <?php if(true) : ?>
    <form method="post" action="<?php echo ROOT_PATH; ?>shares/update">
      <?php foreach($viewModel as $item) : ?>
        <input type="hidden" name="id" class="form-control" value="<?php echo $item['id']; ?>" />
    	<div class="form-group">
    		<label>Edit Title</label>
    		<input type="text" name="title" class="form-control" value="<?php echo $item['title']; ?>" />
    	</div>
    	<div class="form-group">
    		<label>Edit Body</label>
    		<textarea name="body" class="form-control"><?php echo $item['body']; ?></textarea>
    	</div>
    	<div class="form-group">
    		<label>Edit Link</label>
    		<input type="text" name="link" class="form-control" value="<?php echo $item['link']; ?>" />
    	</div>
    	<input class="btn btn-primary" name="update" type="submit" value="Update" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
        <?php endforeach; ?>
    </form>
  <?php endif; ?>
  </div>
</div>
