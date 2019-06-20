<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section id="home-top">
       <?php
       if( have_rows('home_top') ):
         while ( have_rows('home_top') ) : the_row();
         ?>
           <div class="container-fluid" style="background: url(<?php the_sub_field('bkg_part') ?>); background-size: cover;">
           <div class="top-filter mw-60"></div>
             <div class="container">
               <div class="row align-items-center mw-100">
                 <div class="col-xl-9 col-lg-9 col-md-12 col-12 d-flex flex-column">
                   <div class="content-subtitle fs-24">
                     <?php the_sub_field('subtitle'); ?>
                   </div>
                   <div class="content-title montserrat fs-60 text-blue mb-15 fw-700">
                     <?php the_sub_field('title'); ?>
                   </div>
                   <div class="home-excerpt fs-18 lh-28 mt-15 mb-15 mw-50">
                     <?php the_sub_field('excerpt'); ?>
                   </div>
                   <div class="mt-20">
                     <?php
                     $link = get_sub_field('link');
                     if( $link ):
                       $link_url = $link['url'];
                       $link_title = $link['title'];
                       ?>
                       <a class="fs-20 fw-600 after-link-grey" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                     <?php endif; ?>
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
     <section id="home-present" class="container-fluid p-relative">
       <div class="home-present-filter"></div>
       <div class="container">
       <?php
       if( have_rows('home_present') ):
         while ( have_rows('home_present') ) : the_row();
         ?>
        <div class="row align-items-end justify-content-between">
          <div class="col-xl-7 col-lg-7 col-md-12 col-12">
            <div class="fs-52 text-blue fw-700 mb-30">
              <?php the_sub_field('title'); ?>
            </div>
            <div class="home-present-content mw-60">
              <div class="fs-22 text-blue fw-600 mb-30">
                <?php the_sub_field('subtitle'); ?>
              </div>
              <div class="fs-17 lh-28">
                <?php the_sub_field('content'); ?>
              </div>
              <div class="mt-30">
                <?php
                 $link = get_sub_field('link');
                 if( $link ):
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                   ?>
                   <a class="fw-700 fs-18 after-link-grey" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                 <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-12 apparition-2">
            <?php
            $image = get_sub_field('image');
            if( !empty($image) ): ?>
            	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" description="<?php echo $image['description']; ?>"/>
            <?php endif;
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
     <section id="home-services" class="container-fluid">
       <div class="container">
         <div class="row">
           <div class="col-12 text-center fs-52 fw-700 text-blue mb-30">
             <h2>Nos services</h2>
           </div>
         </div>
         <div class="row justify-content-center">
         <?php
         if( have_rows('home_services') ):
           while ( have_rows('home_services') ) : the_row();
           ?>
           <div class="col-xl-5 col-lg-5 col-md-8 col-12 home-service-content p-5 ml-10 mr-10 d-flex flex-column">
             <?php
             $image = get_sub_field('image');
             if( !empty($image) ): ?>
             	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif;
             ?>
             <div class="service-title fs-30 fw-700 mb-15 mt-50">
               <?php the_sub_field('title'); ?>
             </div>
             <div class="service-content fs-17 lh-28 mb-20">
               <?php the_sub_field('content'); ?>
             </div>
             <div class="service-link">
               <?php
                $link = get_sub_field('link');
                if( $link ):
                	$link_url = $link['url'];
                	$link_title = $link['title'];
                	$link_target = $link['target'] ? $link['target'] : '_self';
                	?>
                	<a class="fs-18 fw-700 after-link-grey" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
             </div>
           </div>
           <?php
           endwhile;
           else :
         endif;
         ?>
         </div>
         <div class="row mt-80">
           <div class="col-12 text-center">
             <?php
              $link = get_field('home_rdv');
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
<?php get_footer(); ?>
