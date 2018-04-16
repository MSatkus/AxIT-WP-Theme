<?php if( have_rows('sms_social_icons', 'option') ): ?>
	<section id="social-icon-row" class="container-fluid bg-white social-icon-row">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 class="open-sans text-weight-bold size-20 color-darkgrey"><?php the_field('sms_header', 'option'); ?></h3>
					<p class="open-sans size-10 color-grey"><?php the_field('sms_subtext', 'option'); ?></p>
				</div>
				<div class="col-md-8">
					<?php while ( have_rows('sms_social_icons', 'option') ) : the_row();?>
						<a href="<?php echo get_sub_field('sms_link')['url']; ?>" target="_blank"><i class="fa fa-fw <?php the_sub_field('sms_icon'); ?> fa-3x color-grey" aria-hidden="true"></i></a>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</section>
<?php endif;?>