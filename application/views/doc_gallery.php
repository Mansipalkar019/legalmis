
<div class='container'>
		<h1> Welcome to CodeIgniter Photo Gallery </h1>
		<div class="gallery">
			<?php
			$dir_thumbs = './assets/images/thumbs/';
			$dir_images = './assets/images/';
			$images = directory_map($dir_thumbs);
			
			$i = 1;
			foreach ($doc_list as $key => $image) {
			?>
				<a href="<?php echo base_url($dir_images) . $image;?>">
					<img src="<?php echo base_url($dir_thumbs) . $image;?>" alt="<?php echo $image;?>">
				</a>
			<?php
				if($i++%4 == 0) {
					?>
					<div class="clear"></div>
					<?php
				}
			}
			?>
		</div>
	</div>

	<script type='text/javascript'>
		$(document).ready(function() {
			$('.gallery a').simpleLightbox();
		});
	</script>