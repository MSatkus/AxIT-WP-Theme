<?php if( have_rows('pr_prices', 'option') ): ?>
	<section id="<?php the_field('pr_anchor', 'option'); ?>" class="container-fluid open-sans text-center bg-grey pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="raleway text-uppercase"><?php the_field('pr_header', 'option');?></h2>
					<p class="color-grey size-12 subtext"><?php the_field('pr_subtext', 'option');?></p>
				</div>
			</div>
			<div class="row align-items-end">
				<?php while ( have_rows('pr_prices', 'option') ) : the_row();?>
					<div class="col-md-4 price">
						<h5><?php the_sub_field('pr_title');?></h5>
						<p class="prices"><?php the_sub_field('pr_currency');?><span><?php the_sub_field('pr_price');?></span></p>
						<small><?php the_sub_field('pr_small');?></small>
						<?php if (get_sub_field('pr_mp')):?>
							<p class="extra text-uppercase">OUR MOST POPULAR</p>
						<?php endif;?>
						<ul>
							<?php echo str_replace('p>','li>',get_sub_field('pr_about'));?>
						</ul>
					</div>
				<?php endwhile;?>
			</div>
		</div>
	</section>
<?php endif;?>