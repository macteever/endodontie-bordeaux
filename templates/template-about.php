<?php /* Template Name: Cabinet */ get_header(); ?>
	<main role="main" class="main-content">
		<section id="cabinet-top">
			<?php
			if( have_rows('cabinet_top') ):
				while ( have_rows('cabinet_top') ) : the_row();
				?>
					<div class="container-fluid" style="background: url(<?php the_sub_field('bkg_part') ?>); background-size: cover;">
					<div class="top-filter mw-60"></div>
						<div class="container">
							<div class="row align-items-center mw-100">
								<div class="col-xl-9 col-lg-9 col-md-9 col-12 d-flex flex-column">
									<div class="fs-22">
										<?php the_sub_field('subtitle'); ?>
									</div>
									<div class="fs-80 text-blue mb-15 fw-700">
										<?php the_sub_field('title'); ?>
									</div>
									<div class="cabinet-excerpt fs-17 lh-28 mw-50">
										<?php the_sub_field('excerpt'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="box-parent d-flex flex-column align-items-center">
							<p class="fs-12 text-center ls-2 mb-10">SCROLL</p>
							<div class="box">
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
			<?php
			endwhile;
			else :
			endif;
			?>
		</section>
		<section id="cabinet-endo" class="container-fluid">
	    <div class="container">
	    <?php
	    if( have_rows('cabinet_endo') ):
	      while ( have_rows('cabinet_endo') ) : the_row();
	      ?>
	     <div class="row align-items-center justify-content-between">
	       <div class="col-xl-6 col-lg-6 col-md-12 col-12">
	         <div class="fs-52 text-blue mb-30">
	           <?php the_sub_field('title'); ?>
	         </div>
	         <div class="cabinet-endo-content">
	           <div class="fs-24 lh-32 mb-30">
	             <?php the_sub_field('subtitle'); ?>
	           </div>
	           <div class="fs-17 lh-26 mw-80">
	             <?php the_sub_field('content'); ?>
	           </div>
	           <div class="mt-30">
	             <?php
	              $link = get_sub_field('link');
	              if( $link ):
	                $link_url = $link['url'];
	                $link_title = $link['title'];
	                ?>
	                <a class="fw-700 text-blue fs-18 after-link-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
	              <?php endif; ?>
	           </div>
	         </div>
	       </div>
	       <div class="col-xl-6 col-lg-6 col-md-12 col-12 p-relative text-right">
	         <?php
	         if( have_rows('cabinet_endo_img') ):
	           while ( have_rows('cabinet_endo_img') ) : the_row();
	           ?>
	           <?php
	             $image = get_sub_field('image');
	             if( !empty($image) ): ?>
	               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" description="<?php echo $image['description']; ?>"/>
	             <?php endif;
	           ?>
	           <?php
	           endwhile;
	         else :
	         endif;
	         ?>
	       </div>
	     </div>
	     <?php
	     endwhile;
	     else :
	     endif;
	     ?>
	    </div>
	  </section>
		<section id="cabinet-equipe" class="container-fluid p-relative">
			<div class="row mb-80">
				<div class="col-12 text-center text-blue fs-52">
					<?php the_field('cabinet_team_title'); ?>
				</div>
			</div>
			<div class="cabinet-prev p-absolute zi-9999">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left-cabinet-endodontie-marret.svg" alt="Endodontie bordeaux">
			</div>
			<div class="row cabinet-slider p-relative">
				<?php if ( have_rows('cabinet_slider') ): ?>
				    <?php while ( have_rows('cabinet_slider') ) : the_row();
						?>
						<div class="col-xl-8 col-lg-8 col-12 d-flex cabinet-slider-slide pl-0 o-hidden mr-50 anim-300">
							<div class="cabinet-slider-photo">
								<?php
								$image = get_sub_field('image');
								if ( !empty($image) ): ?>
								  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
							<div class="cabinet-slider-content pl-30 pr-50 pt-30 pb-30">
								<div class="d-flex">
									<h3 class="fs-28 text-blue fw-600"><?php the_sub_field('title'); ?></h3>
									<!-- <i class="fab fa-facebook-square fs-24 text-blue"></i>
									<i class="fab fa-linkedin fs-24 text-blue"></i>
									<i class="fas fa-envelope fs-24 text-blue"></i> -->
								</div>
								<h4 class="fs-20 text-blue mb-50"><?php the_sub_field('subtitle'); ?></h4>
								<div class="fs-17 lh-28">
									<?php the_sub_field('content'); ?>
								</div>
							</div>
						</div>
				    <?php
					endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row mt-80">
        <div class="col-12 text-center">
          <?php
           $link = get_field('cabinet_rdv');
           if( $link ):
             $link_url = $link['url'];
             $link_title = $link['title'];
             ?>
             <a class="btn-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
           <?php endif; ?>
        </div>
      </div>
		</section>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
