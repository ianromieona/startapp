<?php echo count($posts) ?>
<?php pre($posts) ?>
<?php foreach ($posts as $key => $value): ?>
	<?php echo $key."".$value; ?>
<?php endforeach ?>