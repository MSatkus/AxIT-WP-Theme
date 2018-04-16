	<section id="<?php the_field('sls_anchor', 'option'); ?>" class="container-fluid open-sans sub-list">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-5 big-box">
					<img src="<?php echo get_field('sls_image','option')['url'];?>" alt="<?php echo get_field('sls_image','option')['alt'];?>">
				</div>
				<div class="col-md-5 size-12">
					<h3 class="size-20 color-black"><?php the_field('sls_header', 'option'); ?></h3>
					<p><?php the_field('sls_subtext', 'option'); ?></p>
					<div class="row">
						<div class="col-md-2 mini-box">
							<i class="fa fa-fw fa-cloud-upload fa-3x color-orange" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 mini-box">
							<h4><?php the_field('sls_first_row_heading', 'option'); ?></h4>
							<p><?php the_field('sls_first_row_text', 'option'); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 mini-box">
							<i class="fa fa-fw fa-cloud-download fa-3x color-orange" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 mini-box">
							<h4><?php the_field('sls_second_row_heading', 'option'); ?></h4>
							<p><?php the_field('sls_second_row_text', 'option'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>