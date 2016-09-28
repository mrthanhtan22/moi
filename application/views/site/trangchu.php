<div class="grid_7 prefix_1">
	<strong><h3 style="color:#31708f">Welcome</h3></strong>
	<?php foreach ($trangchu as $row): ?>
		<h1 style="text-transform: uppercase; color:#000080;" ><strong><?php echo $row->title?></strong></h1>
		<?php echo $row->content ?>
	</div>
	<?php endforeach ?>

	