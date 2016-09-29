<?php foreach ($news_list as $row): ?>
	<div class="grid_4">
	<?php $slug_news = str_slug($row->title) ?>
	<div class="banner">
			<img src="<?php echo base_url('upload/news/'.$row->image_link)?>" alt="<?php echo $row->meta_desc ?>">
			<div class="label">
				<div class="title" style="font-size:100%; color:#000; background-color:#fff;opacity: 0.7;"><?php echo $row->title ?></div>	
				<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>">LEARN MORE</a>
			</div>
	</div>
	</div>
<?php endforeach ?>
<div class="clear"></div>