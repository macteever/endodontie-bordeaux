<?php /* Template Name: Consultation */ get_header(); ?>
<main role="main" class="main-content">
  <section id="consult-top">
    <?php
    if( have_rows('consult_top') ):
      while ( have_rows('consult_top') ) : the_row();
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
  <section id="consult-endo" class="container-fluid">
    <div class="container">
      <div class="row mb-50">
        <div class="col-12 fs-52 text-blue mb-30">
          <?php the_field('consult_title'); ?>
        </div>
      </div>
      <?php
      if( have_rows('consult_endo') ):
      while ( have_rows('consult_endo') ) : the_row();
      ?>
       <div class="row align-items-top justify-content-between">
         <div class="col-xl-6 col-lg-6 col-md-12 col-12">
           <div class="consult-endo-content">
             <div class="fs-22 fw-600 lh-32 mb-30">
               <?php the_sub_field('subtitle'); ?>
             </div>
             <div class="fs-17 lh-26 mw-80">
               <?php the_sub_field('content'); ?>
             </div>
             <div class="mt-30">
               <?php
                $link = get_sub_field('link');
                if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <a class="fw-700 text-blue fs-18 after-link-blue" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
             </div>
           </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-12 p-relative text-right">
           <?php
           if( have_rows('consult_endo_img') ):
             while ( have_rows('consult_endo_img') ) : the_row();
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
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
