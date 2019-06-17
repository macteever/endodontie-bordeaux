<?php get_header(); ?>
	<main role="main">
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container-fluid d-flex p-0">
					<aside class="single-left-aside anim-300 zi-99999">
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="création logo site internet bordeaux poitiers webmaster freelance Nicolas Métivier" />
					</aside>
					<!-- CONTENT PART -->
					<div class="single-container post-content pt-150 anim-300">
						<div class="single-content mx-auto col-xl-12 col-lg-12 col-12 pl-50 pr-50 mt-50">
							<!-- post title -->
							<?php
							$category = get_the_category();
							$first_category = $category[0];
							?>
							<strong class="montserrat fw-500 fs-17"><?php echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name ); ?></strong>
							<h1 class="montserrat fw-700 fs-60 mt-0"><?php the_title(); ?></h1>
							<div class="post-details mt-30 mb-20">
								<span class="author">Publié par <?php the_author(); ?></span>
								<span class="date"> le <?php the_time('j F Y'); ?></span>
								<span class="float-right hidden-xs"><b><a href="/actualites"><i class="fa fa-angle-left fs-16 ml-15 mr-15" aria-hidden="true"></i>Retour page articles</a></b></span>
							</div>
							<div class="text-justify post-text montserrat fs-17 lh-26">
								<?php the_content(); ?>
							</div>
							<div class="row justify-content-center posts-pagination mt-50	mb-30">
								 <?php posts_nav_link(' &#183; ', 'Prec', 'Suiv'); ?>
								  <span class="nav-previous previus-post"><?php previous_post_link(); ?></span>
								  <span class="ml-15 mr-15">|</span>
								  <span class="nav-next next-post"><?php next_post_link(); ?></span>
							</div>
							<div class="row mb-30">
								<span><b><a href="/actualites"><i class="fa fa-angle-left fs-16 ml-15 mr-15" aria-hidden="true"></i>Retour page articles</a></b></span>
							</div>
							<!-- SHARE -->
							<div class="row justify-content-center social-share mb-15">
								<p class="fs-16 text-center">PARTAGEZ</p>
							</div>
							<div class="row justify-content-center align-items-center pb-50">
								<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook-official fs-18 mr-30" aria-hidden="true"></i></a>
								<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus fs-18 ml-30 mr-30" aria-hidden="true"></i></a>
								<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>"><i class="fa fa-linkedin fs-18 ml-30" aria-hidden="true"></i></a>
							</div>
							<!-- END SHARE PART -->
							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
						</div>
					</div>
					<!-- END CONTENT PART -->
					<aside class="single-right-aside anim-300">
						<div class="mt-200">
							<span class="fs-17 montserrat fw-400 pl-20">À propos de l'auteur</span>
							<div class="single-abt-author d-flex flex-column align-items-center pb-30 pl-20 pt-20 pr-20">
								<?php
								if( have_rows('author') ):
								    while ( have_rows('author') ) : the_row();
									 $image = get_sub_field('img');
								?>
								<img class="visuel-projet mb-10" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
								<p class="montserrat fs-14 lh-22 fw-300">
									<?php the_sub_field('text'); ?>
								</p>
								<div class="author-rs ml-15 d-flex justify-content-around w-80">
									<?php
									if( have_rows('social_icon') ):
									    while ( have_rows('social_icon') ) : the_row();
									?>
									<a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a>
									<?php
									    endwhile;
									else :
									endif;
									?>
								</div>
								<?php
								    endwhile;
								else :
								endif;
								?>
							</div>
							<div class="other-posts pl-10 pr-10 pt-50">
								<div class="single-post-arrow anim-300">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="38px" height="38px">
										<defs>
											<style>.cls-1{fill:#fff;}.cls-2{fill:#a8a8a8;}</style>
										</defs>
										<title>single-arrow</title>
										<g id="Calque_2" data-name="Calque 2">
											<g id="Calque_1-2" data-name="Calque 1">
												<circle class="cls-1" cx="64.5" cy="64.5" r="64"/>
												<path class="cls-2" d="M64.5,1A63.5,63.5,0,1,1,1,64.5,63.58,63.58,0,0,1,64.5,1m0-1A64.5,64.5,0,1,0,129,64.5,64.5,64.5,0,0,0,64.5,0Z"/>
												<polygon class="cls-1" points="48.61 98.31 82.42 64.5 48.62 30.69 49.1 30.21 83.39 64.5 82.91 64.99 82.55 65.33 49.09 98.79 48.61 98.31"/>
												<polygon class="cls-2" points="49.1 29.5 47.91 30.69 81.72 64.5 47.9 98.31 49.09 99.5 82.9 65.68 82.91 65.69 84.1 64.5 49.1 29.5 49.1 29.5"/>
											</g>
										</g>
									</svg>
								</div>
								<h3 class="fs-17 montserrat uppercase mb-30">Les derniers articles :</h3>
								<?php
								$args = array(
									'post_type' => 'post',
									'post_status' => 'publish',
									'posts_per_page' => 5,
									'caller_get_posts'=> 1
								);
								$my_query = null;
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<p class="d-flex mb-30">
										<a class="d-flex align-items-center montserrat fs-15" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(); ?>
											<?php the_title(); ?>
										</a>
									</p>
									<?php
									$name = get_post_meta($my_query->post->ID, 'WritersName', true);
									if ($name){
										echo 'Writers name: ' .$name;
									}
								endwhile;
								}
								wp_reset_query();  // Restore global post data stomped by the_post().
								?>
							</div>
						</div>
					</aside>
				</div>
			</article>
			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
