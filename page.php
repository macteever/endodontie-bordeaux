<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container pt-150">
			<!-- article -->
			<article class="col-xl-8 col-lg-8 col-md-10 col-12 mx-auto">
				<h1 class="fs-52 montserrat fw-700"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
