<?php get_header(); ?>
<main role="main" class="main-content">
        <div class="container-fluid tmplt-projets">
            <div class="container pt-150 pb-50 block-parallax">
					<div class="row tmplt-projets-title mb-15">
						<h1 class="montserrat fs-72 fw-700 ml-15">Les Projets</h1>
					</div>
               <div class="row tmplt-projets-category mb-30 pt-20">
                  <?php
                  $taxonomy = 'taxonomy-projets';
                  $terms = get_terms($taxonomy);

                  if ( $terms && !is_wp_error( $terms ) ) :
                  ?>
                      <ul class="d-flex w-100 montserrat uppercase fs-14 fw-300 pl-15">
                          <?php foreach ( $terms as $term ) { ?>
                              <li class="ls-2"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
                          <?php } ?>
                          <li class="ls-2 ml-auto"><a href="/projets"><b>voir tout</b></a></li>
                      </ul>
                  <?php endif;?>
               </div>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="row row-templt-projets mt-15 mb-15 archive-parallax anim-300">
						<div class="col-xl-6 col-lg-6 col-md-12 col-12 archive-parallax-child">
							<span class="tmplt-projets-date fs-15"><?php the_time('Y'); ?></span>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img class="anim-300 tmplt-projet-thumbnail mb-30" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');" alt="Création site internet Webmaster Freelance Bordeaux Poitiers Nicolas Métivier"/>
							</a>
							<div class="montserrat fs-16 category ml-auto">
								<?php $term_list = wp_get_post_terms($post->ID, 'taxonomy-projets', array("fields" => "all"));
								foreach($term_list as $term_single) {?>
								<span class="fs-15"><?php echo $term_single->name; ?></span>
								<?php } ?>
							</div>
							<h3 class="fs-36 montserrat fw-700"><?php the_title(); ?></h3>
						</div>

					</div>
						<?php endwhile; ?>
					<?php endif; ?>
            </div>
        </div>
</main>

<?php get_footer(); ?>
