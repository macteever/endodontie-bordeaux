<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="main-content">
      <div id="fullpage">
         <?php
         if( have_rows('home_part') ):
            while ( have_rows('home_part') ) : the_row();
            ?>
            <section data-anchor="<?php the_sub_field('anchor'); ?>" class="section home-part background anim-300 <?php the_sub_field('anchor'); ?>" style="background: url(<?php the_sub_field('bkg_part') ?>); background-size: cover;">
               <div class="container-fluid">
                  <div class="row align-items-center mw-100">
                     <div class="col-xl-6 col-lg-6 col-md-8 col-12 d-flex flex-column home-col-content">
                        <div class="uppercase content-title montserrat mb-15 w-100"><?php the_sub_field('title_part'); ?></div>
                        <div class="home-loading-bar"></div>
                        <div class="home-excerpt fs-18 lh-26 mt-15 mb-15">
                          <?php the_sub_field('excerpt'); ?>
                        </div>
                        <div class="mt-20">
                          <a class="home-part-cta anim-300" href="<?php the_sub_field('link'); ?>">En savoir plus</a>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-4 col-12 home-col-img">
                       <?php $image = get_sub_field('img_part');
                       if( !empty($image) ): ?>
                      	<img class="home-img-anim" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
                      <?php endif; ?>
                     </div>
                  </div>
               </div>
            </section>
            <?php
          endwhile;
         else :
         endif;
         ?>
      </div>
   </main>
<?php get_footer(); ?>
