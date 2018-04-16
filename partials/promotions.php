<?php if( have_rows('pss_sections', 'option') ): ?>
	<section id="<?php the_field('pss_anchor', 'option'); ?>" class="container-fluid open-sans text-center promotion">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="raleway text-uppercase"><?php the_field('pss_header', 'option');?></h2>
					<p class="size-12 color-grey"><?php the_field('pss_subtext', 'option');?></p>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows('pss_sections', 'option') ) : the_row();?>
					<div class="col-md-4">
						<i class="fa fa-fw <?php the_sub_field('pss_icon');?> fa-2x" aria-hidden="true"></i>
						<h4><?php the_sub_field('pss_section_header');?></h4>
						<p class="size-12 color-grey"><?php the_sub_field('pss_section_text');?></p>
					</div>
				<?php endwhile;?>
				</div>
			</div>
		</div>
	</section>
<?php endif;?>