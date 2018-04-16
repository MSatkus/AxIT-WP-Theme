<?php if( have_rows('tst_testimonial', 'option') ): ?>
	<section id="<?php the_field('tst_anchor', 'option'); ?>" class="container-fluid open-sans testimonials">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h2 class="raleway text-uppercase"><?php the_field('tst_header', 'option');?></h2>
					<p class="color-grey size-12 subtext"><?php the_field('tst_subtext', 'option');?></p>
				</div>
			</div>
			<div class="row justify-content-between">
				<?php while ( have_rows('tst_testimonial', 'option') ) : the_row();?>
					<div class="col-md-4 box">
						<div class="testimonial row bg-grey">
							<p class="color-grey size-12"><?php the_sub_field('tst_text');?></p>
						</div>
						<div class="about row">
							<div class="col-xs-4">
								<img src="<?php echo get_sub_field('tst_photo')['url']; ?>" alt="<?php echo get_sub_field('tst_photo')['alt']; ?>">
							</div>
							<div class="col-xs-8">
								<h3><?php the_sub_field('tst_name');?></h3>
								<small class="color-grey"><?php the_sub_field('tst_position');?></small>
							</div>
						</div>
					</div>
				<?php endwhile;?>
			</div>
		</div>
	</section>
<?php endif;?>