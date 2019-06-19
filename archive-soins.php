<?php get_header(); ?>
<main role="main" class="main-content">
  <?php if ( have_posts() ) : ?>
  <div class="container-fluid">
    <div class="container">
      <div class="row soins-title pt-150">
        <div class="col-12 text-center">
          <span class="fs-20">Dr. Matthieu Marret</span>
          <h1 class="fs-80 text-blue fw-700 mt-0 mb-50">Les soins</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bkg-grey">
    <div class="container">
      <div class="row justify-content-center pt-80 pb-80">
        <div class="col-xl-6 col-lg-6 col-12 text-center">
          <h2 class="fs-36 text-blue"><?php the_field('archive_subtitle', 'option'); ?></h2>
          <div class="fs-18 lh-28 mt-30">
            <?php the_field('archive_content', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="archive-soins" class="container-fluid">
    <div class="container">
      <div class="row justify-content-center pt-50 mw-80 mx-auto">
        <?php
        while ( have_posts() ) :
          the_post();
          ?>
          <div class="col-xl-6 col-lg-6 col-12 p-2 anim-300 anim-300">
            <a href="<?php echo esc_url( get_permalink()); ?>">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php echo get_the_post_thumbnail(); ?>
                <div class="info-cta">
                  <i class="text-blue material-icons">info</i>
                </div>
                <div class="soin-hover-thumbnail anim-300">
                  <h2 class="fs-30 fw-700 text-blue"><?php the_title(); ?></h2>
                  <a class="fs-20 fw-600 text-blue" href="<?php echo esc_url( get_permalink()); ?>">En savoir plus</a>
                </div>
              </article>
            </a>
          </div>

          <?php
          // End the loop.
        endwhile;
        else :
          get_template_part( 'template-parts/content/content', 'none' );

        endif;
        ?>
      </div>
      <div class="row mt-80">
        <div class="col-12 text-center">
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
    </div>
  </div>
</main>

<?php get_footer(); ?>
