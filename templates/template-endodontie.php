<?php /* Template Name: Endodontie */ get_header(); ?>
<main role="main" class="main-content">
   <?php
      if( have_rows('top_page') ):
          while ( have_rows('top_page') ) : the_row();
          ?>
          <div class="container-fluid redac-top-page" style="background: url(<?php the_sub_field('bkg'); ?>); background-size: cover; background-position: bottom;">
             <div class="container h-100">
                <div class="row h-100 align-items-center">
                   <div class="offset-xl-1 offset-lg-1 col-xl-6 col-lg-7 col-md-12 col-12 pl-0 pb-30 page-intro anim-700">
                     <div class="page-intro-anim anim-700">
                        <h1 class="montserrat fs-72 fw-700 mt-0 ml-30 anim-700"><?php the_sub_field('title'); ?></h1>
                        <div class="montserrat fs-18 lh-24 mb-50 ml-30 anim-700">
                           <?php the_sub_field('headline'); ?>
                        </div>
                        <div class="ml-30 anim-700">
                           <a class="btn-blue text-white" href="<?php the_sub_field('lien'); ?>">Me contacter</a>
                        </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
      <?php
      endwhile;
      else :
      endif;
      ?>
      <div class="container-fluid">
         <div class="container">
            <?php
            if( have_rows('redac_content') ):
               while ( have_rows('redac_content') ) : the_row();
               ?>
               <div class="row mt-15 mb-150 redac-content align-items-end justify-content-around">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-12 zi-9 redac-content-img">
                     <?php
                        $image = get_sub_field('img');
                     ?>
                     <?php
                     echo '<pre>';
                    	var_dump( $image );
                     echo '</pre>';
                     ?>
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-12 zi-99 pl-30">
                     <div class="montserrat fs-66 fw-700 mb-30"><?php the_sub_field('subtitle'); ?></div>
                     <div class="montserrat fs-17 lh-24 mt-20 ">
                        <?php the_sub_field('content'); ?>
                     </div>
                  </div>
               </div>
               <?php
               endwhile;
               else :
               endif;
               ?>
            <div class="row justify-content-around mb-150">
               <?php
               if( have_rows('redac_textbox') ):
                  while ( have_rows('redac_textbox') ) : the_row();
                  ?>
               <div class="col-xl-5 col-lg-5 col-md-12 col-12 d-flex redac-textbox align-items-center p-15">
                  <div>
                     <?php the_sub_field('icon'); ?>
                  </div>
                  <div class="montserrat text-darkgrey fs-22 lh-28 ml-30">
                     <?php the_sub_field('message'); ?>
                  </div>
               </div>
               <?php
               endwhile;
               else :
               endif;
               ?>
            </div>
         </div>
      </div>
      <div class="container-fluid redac-banner mb-150" style="background: url(<?php the_field('redac_banner'); ?>);">
      </div>
      <div class="container-fluid mt-50 mb-150">
         <div class="container">
         <?php
         if( have_rows('redac_endpage') ):
            while ( have_rows('redac_endpage') ) : the_row();
            ?>
            <div class="row justify-content-center redac-endpage">
               <div class="col-xl-8 col-lg-10 col-md-12 col-12 mb-50">
                  <div class="montserrat fs-72 fw-700 text-center mb-50">
                     <?php the_sub_field('subtitle'); ?>
                  </div>
                  <div class="montserrat fs-18 text-center">
                     <?php the_sub_field('text'); ?>
                  </div>
               </div>
            </div>
            <?php
            endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
