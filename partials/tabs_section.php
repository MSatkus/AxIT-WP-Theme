<?php if( have_rows('tss_tabs', 'option') ): ?>
	<section id="<?php the_field('tss_anchor', 'option'); ?>" class="container-fluid bg-grey tabs">
		<div class="container">
			<div class="row">
				<div class="col-md-2 text-center big-box">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<?php $i=1;
						  while ( have_rows('tss_tabs', 'option') ) : the_row();?>
						  	<?php if ($i==1): ?>
						  		<a class="nav-link active link-custom bg-orange" id="v-pills-<?php echo $i ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i ?>" role="tab" aria-controls="v-pills-<?php echo $i ?>" aria-selected="true"><?php the_sub_field('tss_tab_name'); ?></a>
						  	<?php else:?>
						  		<a class="nav-link link-custom" id="v-pills-<?php echo $i ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i ?>" role="tab" aria-controls="v-pills-<?php echo $i ?>" aria-selected="false"><?php the_sub_field('tss_tab_name'); ?></a>
						  	<?php endif;
						  		$i++;
						  endwhile;?>
					</div>
				</div>
				<div class="col-md-6 d-flex flex-column justify-content-around">
					<div class="row">
						<div class="col mini-box">
							<h3 class="open-sans size-20"><?php the_field('tss_header', 'option'); ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="col mini-box">
							<div class="tab-content open-sans" id="v-pills-tabContent">
							  <?php $i=1;
							  while ( have_rows('tss_tabs', 'option') ) : the_row();?>
							  	<?php if ($i==1): ?>
							  		<div class="tab-pane fade show active" id="v-pills-<?php echo $i ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $i ?>-tab"><?php the_sub_field('tss_tab_text');?></div>
							  	<?php else:?>
							  		<div class="tab-pane fade" id="v-pills-<?php echo $i ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $i ?>-tab"><?php the_sub_field('tss_tab_text');?></div>
							  	<?php endif;
							  		$i++;
							  endwhile;?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col mini-box align-end">
							<a href="<?php echo get_field('tss_button', 'option')['url'];?>" target="<?php echo get_field('tss_button', 'option')['target']; ?>" class="tabs-btn"><?php echo get_field('tss_button', 'option')['title'];?></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_field('tss_image', 'option')['url'];?>" alt="<?php echo get_field('tss_button', 'option')['alt'];?>">
				</div>
			</div>
		</div>
	</section>
<?php endif;?>