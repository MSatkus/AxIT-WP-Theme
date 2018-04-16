<section id="hero" class="container-fluid hero" style="background-image: url('<?php echo get_field('hs_hero_background_image','option');?>')">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 konteineriukas">
					<img class="hero-logo" src="<?php echo get_field('hs_hero_logo', 'option')['url'] ;?>" alt="<?php echo get_field('hs_hero_logo', 'option')['alt'] ;?>">
					<h1 class="hero-style"><?php the_field('hs_hero_heading', 'option');?></h1>
					<p><?php the_field('hs_hero_subtext', 'option');?></p>
					<a href="<?php echo get_field('hs_hero_button', 'option')['url'];?>"><?php echo get_field('hs_hero_button', 'option')['title'];?></a>
				</div>
				<div class="col-md-6 konteineriukas forma">
					<div class="form mx-auto align-center">
						<h3 class="form-heading bg-grey text-center">Try Your <span>Free</span> Trial Today</h2>
						<form class="bg-white mn-form ">
						  <div class="form-group">
						    	<input type="text" class="input" id="inputName" placeholder="Name">
						  </div>
						  <div class="form-group">
						    <input type="email" class="input" id="inputEmail" placeholder="E-mail">
						  </div>
						  <div class="form-group">
						 	 <input type="password" class="input" id="inputPassword" placeholder="Password">
						  </div>
						  <button type="submit" class="btn bg-orange">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>