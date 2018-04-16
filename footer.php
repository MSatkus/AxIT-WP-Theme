	<footer class="container-fluid">
		<div class="container">
			<?php if( have_rows('ts_footer_social_images', 'option') ): ?>
				<div class="row">
					<div class="col text-center">
						<?php while ( have_rows('ts_footer_social_images', 'option') ) : the_row();?>
							<a href="<?php echo get_sub_field('ts_link')['url']; ?>" target="_blank"><i class="fa fa-fw <?php echo get_sub_field('ts_icon'); ?> fa-2x color-grey" aria-hidden="true"></i></a>
						<?php endwhile;?>
					</div>
				</div>
			<?php endif;?>
			<div class="row">
				<div class="col text-center size-12">
					<p>&copy <?php echo date('Y');?> <?php echo get_field('ts_footer_text', 'option');?></p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<?php wp_footer();?>
</body>

</html>