<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
<?php endif; ?>
	<?php foreach($viewModel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
			<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['name'] == 'admin') : ?>
				<form method="post" action="<?php echo ROOT_PATH; ?>shares/edit"><br />
					<input type="hidden" name='shared_id' value="<?php echo $item['id']; ?>" />
					<input class="btn btn-primary" name="update" type="submit" value="Update" />
					<input class="btn btn-danger" name="delete" type="submit" value="Delete" />
			</form>
		<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>
