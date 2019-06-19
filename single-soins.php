<?php get_header(); ?>
	<main role="main">
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container-fluid" style="
				background: -webkit-linear-gradient(180deg, rgba(255,255,255,0.15) 17%, #FFFFFF 100%);
				background: -o-linear-gradient(180deg, rgba(255,255,255,0.15) 17%, #FFFFFF 100%);
				background: linear-gradient(180deg, rgba(255,255,255,0.15) 17%, #FFFFFF 100%), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');
				background-size: cover;	">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<?php
								if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb( '<p class="fs-18 mb-0" id="breadcrumbs">','</p>' );
								}
								?>
								<h1 class="fw-700 fs-72 mt-0 mb-0 text-blue"><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="container">
						<div class="row mb-50">
							<div class="col-12 fs-42 fw-600">
								<?php the_field('subtitle'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-12 fs-17 lh-26 mw-80">
								<div class="mw-80">
									<?php the_field('content'); ?>
								</div>
								<div class="col-12 mt-30">
									<?php
									$link = get_field('archive_rdv', 'option');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										?>
										<a class="btn-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-12 d-flex flex-column">
								<?php
			          if( have_rows('galerie_img') ):
			            while ( have_rows('galerie_img') ) : the_row();
			            ?>
			            <?php
			              $image = get_sub_field('img');
			              if( !empty($image) ): ?>
			                <img class="mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" description="<?php echo $image['description']; ?>"/>
			              <?php endif;
			            ?>
			            <?php
			            endwhile;
			          else :
			          endif;
			          ?>
							</div>
						</div>

						<div class="row">

						</div>

						<div class="row posts-pagination mt-50 mb-80">
							<div class="col-xl-10 col-lg-10 col-md-10 col-12 d-flex justify-content-center mx-auto">
								<div class="nav-previous previus-post fs-15"><?php previous_post_link(); ?></div>
								<div class="nav-next next-post fs-15"><?php next_post_link(); ?></div>
							</div>
						</div>
					</div>
				</div>
			</article>
		<?php endwhile; ?>

		<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
		<?php endif; ?>
		</section>
	</main>
<?php get_footer(); ?>
