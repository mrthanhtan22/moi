<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<?php $this->load->view('site/head',$this->data); ?>
	
</head>
<body class="page1" id="top">
<!--header -->
	<header>
		<?php $this->load->view('site/header/menu'); ?>
	</header>
		
		<?php $this->load->view('site/slider/slide',$this->data); ?>
	
<!-- end header -->

<!--contetnt-->
	
<div class="content">
	<div class="ic">Liên kết toàn cầu</div>
		<div class="container_12">

		<div class="container_12">
			<?php $this->load->view('site/vekhuyenmai', $this->data); ?>
		</div>
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="container_12">
					<?php $this->load->view('site/searchve/search'); ?>

					<?php $this->load->view('site/trangchu', $this->data); ?>
				</div>
			</div>
			
		</div>

		
	<!---dichvu-->
	
		<div class="container_12">
		<?php $this->load->view('site/dichvu'); ?>
		</div>
	<!--end dichvu-->
			
			



		<div class="panel panel-success">
			<div class="panel-heading">
			<div class="container_12">
			<?php $this->load->view('site/tinmoi', $this->data); ?>
			</div>
		</div>
		</div>
		
		</div>
</div>
	




<!--end content-->



 <!-- footer -->
 	<footer id="lienhe" class="footer"  role="contentinfo">
 		<?php $this->load->view('site/footer'); ?>
 	</footer>
 		<?php $this->load->view('site/js'); ?>
 <!-- end footer -->
</body>
</html>