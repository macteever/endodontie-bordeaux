<?php /* Template Name: Contact */ get_header(); ?>
	<main role="main" class="main-content">
		<div class="container-fluid pl-0 pr-0 contact-container">
			<div class="container">
				<div class="row no-flex pt-150">
					<div class="col-xl-5 col-lg-5 col-md-5 col-12">
						<h1 class="fs-72 ls-4 ml-30 uppercase text-white montserrat fw-700"><?php the_title(); ?></h1>
						<div class="fs-17 montserrat lh-24 text-white contact-content"><?php the_field('contact_content'); ?></div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-12 mx-auto">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Formulaire de contact 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
