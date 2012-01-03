<?php foreach($posts as $post): ?>
	<div class="post">	
		<h3><?php echo anchor('posts/show/'.$post->id, $post->title); ?></h3>
		<div class="content">
			<?php echo $post->content ?>
		</div>
	</div>
<?php endforeach; ?>
