<div class="slider_wrapper">
			<div id="camera_wrap" class="">
			<?php foreach ($slide_list as $row): ?>
				<div data-src="<?php echo base_url('upload/slide/'.$row->image_link)?>">
					<div class="caption fadeIn">
						<h2 class="an_hinh"><?php echo $row->name ?></h2>
						<div class="price">
							<strong><?php echo $row->info ?></strong>
						</div>
						<a href="<?php echo $row->link ?>">LEARN MORE</a>
					</div>
				</div>
			<?php endforeach ?>
	</div>
		</div>