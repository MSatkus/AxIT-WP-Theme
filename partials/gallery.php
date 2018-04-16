<section id="<?php the_field('gss_anchor', 'option'); ?>" class="container-fluid bg-grey open-sans gallery">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-5">
					<h3 class="size-20"><?php the_field('gss_header', 'option'); ?></h3>
					<p class="size-12 color-grey"><?php the_field('gss_subtext', 'option'); ?></p>
				</div>
				<div class="col-md-5">
					<img src="<?php echo get_field('gss_image','option')['url'];?>" alt="<?php echo get_field('gss_image','option')['url'];?>">
				</div>			
			</div>
		</div>
</section>