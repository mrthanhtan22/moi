<div class="boby">

	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
						<li><a href="<?php echo base_url('lienhe') ?>">Home</a></li>

						</ul>
					</div>
				</div>
				<div class="row">
				<div class="col-md-12">
				<h1>Liên hệ</h1>
				</div>
				</div>
			</div>
		</section>

		<div class="container">

			<div class="row">
				<div class="col-md-8">
					<div class="blog-posts single-post">

						<article class="post post-large blog-single-post">

						<div class="re_img">
							
						<?php foreach ($lienhe as $row): ?>
								
								<p><?php echo $row->content ?></p>
							
						<?php endforeach ?>
							
						</div>
						</article>

					</div>
				</div><br><br>
				<div class="col-sm-4">
					<div class="alert alert-info">
						<strong>Tìm vé vé online!</strong> 
					</div>
					<iframe style="border:0px;width:100%;height:540px; backgroud-color: red" id="ifrSearchForm" src="http://easyweb-mobile.galileo.vn/Default.aspx?PCC=68NQ" scrolling="no"></iframe>
				</div>


		</div>
				

	</div>

</div>



</div>

