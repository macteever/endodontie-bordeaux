<?php /* Template Name: Contact */ get_header(); ?>
<main role="main" class="main-content">
	<div class="container pt-150">
		<div class="row justify-content-center">
			<div class="col-xl-11 col-lg-11 col-md-12 col-12 text-blue fs-80 fw-600">
				<h1><?php the_title(); ?><h1>
			</div>
		</div>
		<div class="row justify-content-around">
			<div class="col-xl-5 col-lg-5 col-md-12 col-12">
				<?php echo do_shortcode('[contact-form-7 id="150" title="page-contact"]'); ?>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-12 col-12 d-flex flex-column justify-content-around">
				<div class="contact-coord fs-18">
					<?php the_field('contact_coordonnees'); ?>
				</div>
				<h3 class="fs-18 uppercase mb-20">nous contacter</h3>
					<div class="contact-contact fs-17">
						<?php the_field('contact_contact'); ?>
					</div>
				<h3 class="fs-18 uppercase mb-20">Comment venir</h3>
				<div class="contact-venir fs-17">
				<?php the_field('contact_venir'); ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-80">
			<div class="col-12 text-center">
				<?php
				 $link = get_field('link_urgence');
				 if( $link ):
					 $link_url = $link['url'];
					 $link_title = $link['title'];
					 ?>
					 <a class="fw-700 uppercase text-blue fs-18 btn-blue-reverse" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
				 <?php endif; ?>
			</div>
		</div>
	</div>`
	<div class="container-fluid mt-80">
		<div class="row map">
			<div id="map"></div>
		</div>
	</div>
	<div class="container-fluid pt-100 pb-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-5 col-12 text-center">
					<img class="mb-15" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wetransfer.svg" alt="Wetransfer Endodontie Bordeaux Docteur Mattghieu Marret chirugien dentiste">
					<h3 class="fs-22 text-blue mb-30">Un <b>document</b> à transmettre</h3>
					<div class="fs-17">
						<?php the_field('wetransfer'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYM2FZ6PBFvla3XFMkE6xALHBw2KPY3LY&callback=initMap"></script>
<!-- /container-fluid -->
<?php get_footer(); ?>
