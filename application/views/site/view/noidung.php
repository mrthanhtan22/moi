<div class="boby">
	
	


<div role="main" class="main">

<section class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo base_url('tintuc') ?>">Home</a></li>

</ul>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h1>Chi tiết tin</h1>
</div>
</div>
</div>
</section>

<div class="container">

<div class="row">
<div class="col-md-8">
<div class="blog-posts single-post">

<article class="post post-large blog-single-post">
<div class="post-image">
			<div class="img-thumbnail">
			<a>
			<img class="img-responsive" src="<?php echo base_url('upload/news/'.$info->image_link) ?>" alt="<?php echo $info->title ?>">
			</a>
			</div>
		</div>

<div class="post-date">
<span class="day"> <?php echo get_days($info->created) ?></span>
<span class="month"><?php echo get_date($info->created) ?></span>
</div>

<div class="post-content">

<h2><a><?php echo $info->title ?></a></h2>

<div class="post-meta">
	
	<span><i class="fa fa-comments"></i> <a href="#"><?php $info->count_view ?> Comments</a></span>
</div>
	<div class="content_img re_img">
		<p><?php echo $info->content ?></p>
	</div>
	
</div>
</article>

</div>
</div>

<div class="col-md-4">
<aside class="sidebar">

<div class="tabs mb-xlg" style="margin-bottom:-90px !important">
		<div class="alert alert-info">
						<strong>Tìm vé vé online!</strong> 
		</div>
		<iframe style="border:0px;width:100%;height:540px; backgroud-color: red" id="ifrSearchForm" src="http://easyweb-mobile.galileo.vn/Default.aspx?PCC=68NQ" scrolling="no"></iframe>
	</div>

<div class="tabs mb-xlg" >
	<ul class="nav nav-tabs">
	<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i>Bài viết mới: </a></li>
	
	</ul>
	<div class="tab-content">
	<div class="tab-pane active" id="popularPosts">
	<?php foreach ($news_list as $row): ?>
		<?php $slug_news = str_slug($row->title) ?>
	
	<ul class="simple-post-list">
		<li>
		<div class="post-image">
			<div class="img-thumbnail">
			<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>">
			<img class="img-responsive" src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->title ?>">
			</a>
			</div>
		</div>
			<div class="post-info">
				<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>"><?php echo $row->title ?></a>
				<div class="post-meta"><?php echo get_date($row->created) ?></div>
			</div>
		</li>
	</ul>
	<?php endforeach; ?>
	</div>
	
	</div>
	</div>
	

<hr>


</aside>
</div>
</div>

</div>

</div>



</div>