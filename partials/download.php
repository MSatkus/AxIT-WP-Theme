<section id="<?php the_field('dss_anchor', 'option'); ?>" class="container-fluid open-sans download" style="background-image: url('<?php echo get_field('dss_background_image','option');?>')">
		<div class="container text-center">
			<h2 class="text-uppercase raleway"><?php the_field('dss_header', 'option'); ?></h2>
			<p class="size-12"><?php the_field('dss_subtext', 'option'); ?></p>
			<a href="<?php echo get_field('dss_button', 'option')['url'];?>" target="<?php echo get_field('dss_button', 'option')['target'];?>"><?php echo get_field('dss_button', 'option')['title'];?></a>
		</div>
</section>
