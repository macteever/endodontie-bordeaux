<?php /* Template Name: Endodontie */ get_header(); ?>
<main role="main" class="main-content">
  <section id="endo-top">
    <?php
    if( have_rows('endo_top') ):
      while ( have_rows('endo_top') ) : the_row();
      ?>
        <div class="container-fluid" style="background: url(<?php the_sub_field('bkg_part') ?>); background-size: cover; background-repeat: no-repeat;">
        <div class="endo-filter mw-60"></div>
          <div class="container">
            <div class="row align-items-center mw-100">
              <div class="col-xl-9 col-lg-9 col-md-9 col-12 d-flex flex-column ml-auto">
                <div class="content-subtitle fs-22 text-right">
                  <?php the_sub_field('subtitle'); ?>
                </div>
                <div class="content-title montserrat fs-80 text-blue mb-15 fw-700 text-right">
                  <?php the_sub_field('title'); ?>
                </div>
                <div class="home-excerpt fs-17 lh-28 mt-15 mb-15 mw-50 ml-auto text-right">
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
  <section id="endo-about" class="container-fluid">
    <div class="container">
      <div class="row mb-50">
        <div class="col-12 fs-52 text-blue">
          <?php the_field('endo_subtitle'); ?>
        </div>
      </div>
      <?php
        if ( have_rows('endo_about') ): ?>
          <?php while ( have_rows('endo_about') ) : the_row();
          ?>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <?php
                if ( have_rows('endo_about_content') ): ?>
                  <?php while ( have_rows('endo_about_content') ) : the_row();
                  ?>
                  <div class="endo-about-content">
                    <?php the_sub_field('content'); ?>
                  </div>
                  <?php endwhile;
                 endif;
               ?>
               <div class="mt-50">
                 <?php
                 $link = get_sub_field('link');
                 if( $link ):
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                   ?>
                   <a class="fs-20 text-blue fw-700 after-link-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                 <?php endif; ?>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 text-center">
              <?php
              $image = get_sub_field('image');
              if ( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
              <p class="fs-15"><?php the_sub_field('legende'); ?></p>
            </div>
          </div>
        <?php endwhile;
       endif;
       ?>
    </div>
  </section>
  <section id="endo-consult" class="container-fluid">
    <div class="container">
    <?php
    if( have_rows('endo_consult') ):
      while ( have_rows('endo_consult') ) : the_row();
      ?>
     <div class="row align-items-end justify-content-between">
       <div class="col-xl-6 col-lg-6 col-md-12 col-12">
         <div class="fs-52 text-white mb-30">
           <?php the_sub_field('title'); ?>
         </div>
         <div class="enbdo-consult-content">
           <div class="fs-30 text-white mb-30">
             <?php the_sub_field('subtitle'); ?>
           </div>
           <div class="fs-17 lh-26 text-white">
             <?php the_sub_field('content'); ?>
           </div>
           <div class="mt-30 text-white">
             <?php
              $link = get_sub_field('link');
              if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <a class="fw-700 fs-18 text-white after-link-white" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
           </div>
         </div>
       </div>
       <div class="col-xl-6 col-lg-6 col-md-12 col-12 p-relative text-center">
         <?php
         if( have_rows('endo_consult_img') ):
           while ( have_rows('endo_consult_img') ) : the_row();
           ?>
           <?php
             $image = get_sub_field('image');
             if( !empty($image) ): ?>
               <img class="apparition-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" description="<?php echo $image['description']; ?>"/>
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
  <section id="endo-traitement" class="container-fluid">
    <div class="container">
      <?php
      if( have_rows('endo_traitement') ):
        while ( have_rows('endo_traitement') ) : the_row();
        ?>
        <div class="row justify-content-around">
          <div class="col-12 text-blue fs-52 mb-50">
            <?php the_sub_field('title'); ?>
          </div>
          <div class="col-xl-5 col-lg-5 col-12 fs-17 lh-26">
            <?php the_sub_field('content'); ?>
          </div>
          <div class="col-xl-5 col-lg-5 col-12 tooth-before">
            <?php the_sub_field('content_list'); ?>
          </div>
        </div>
        <?php
        endwhile;
      else :
      endif;
      ?>
      <div class="row mt-80">
        <div class="col-12 text-center">
          <?php
           $link = get_field('endo_rdv');
           if( $link ):
             $link_url = $link['url'];
             $link_title = $link['title'];
             ?>
             <a class="btn-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
           <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
