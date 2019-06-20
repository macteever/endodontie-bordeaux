<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container pt-150">
			<!-- article -->
			<article class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto text-center">
				<h1 class="fs-52 montserrat fw-700 text-blue"><?php the_title(); ?></h1>
				<div class="fs-17 lh-26">
					<?php the_content(); ?>
				</div>
			</article>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
