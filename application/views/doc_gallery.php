<style>
	.sl-wrapper .sl-navigation button.sl-prev {
  left: 20px;
  font-size: 7rem !important;
}
.sl-wrapper .sl-close {
  font-size: 5rem !important;
}
.sl-wrapper .sl-counter {
  font-size: 2rem !important;
}
.sl-overlay {
  background: #fff;
  opacity: inherit !important;
}
.sl-wrapper .sl-navigation button.sl-next {
  right: 20px;
  font-size: 7rem !important;
}
.gallery{
  margin-left: 30px !important;
}
</style>
<?php $this->load->view('header'); ?>
<!--==================breadcrumb====================-->
<div class="container-fluid first-body bdy">
   <div class="container-fluid">
   <div class="row">
         <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Sales</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color: #000;">Gallery</li>
               </ol>
            </nav>
         </div>
      </div>
     
      <div class="row">
		<div class="gallery">
            
			<?php
			$dir_thumbs = './assets/images/thumbs/';
			
			$i = 1;
			foreach ($doc_list as $key => $image) {
			?>
           
				<a href="<?php echo base_url() . $image;?>">
					<img src="<?php echo base_url() . $image;?>" alt="<?php echo $image;?>" style="padding: 10px;border: #eeeee4 solid 2px;width: 300px;margin-top: 20px;margin-left:15px;
    height: 300px;">
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
    </div>
</div>
<!-- bodypart -->
<?php $this->load->view('footer'); ?>
<script src="<?php echo base_url();?>assets_admin/view_js/documentlist.js"></script>
<script type="text/javascript">
$(document).ready(function() {
			$('.gallery a').simpleLightbox();
		});
</script>