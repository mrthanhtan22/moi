<div class="grid_12">
<strong><h3 style="color:#31708f" class="head1">Khuyến mãi mới</h3>
</div>
<?php foreach ($list_khuyenmai as $row): ?>
	<div class="grid_4">
		<div class="block1">
			<time datetime="<?php echo get_date($row->created) ?>"><span><?php echo get_date($row->created) ?></span></time>
			<div class="extra_wrapper">
				<div class="text1 col1"><a href="<?php echo base_url('tintuc/view/'.$row->id)?>"><?php echo $row->title ?></a></div>
				<?php echo $row->meta_desc ?>
			</div>
		</div>
	</div>
<?php endforeach ?>
	
	
	