<?php /* Template Name: Logotype */ get_header(); ?>
<main role="main" class="main-content">
   <?php
    if( have_rows('logo_top_page') ):
      while ( have_rows('logo_top_page') ) : the_row();
      ?>
      <div class="container-fluid logo-top-page" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: bottom;">
         <div class="container h-100">
            <div class="row h-100 align-items-center">
               <div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto pl-0 pb-30 page-intro">
                  <div class="page-intro-anim anim-700">
                    <h1 class="montserrat fs-72 fw-700 mt-0"><?php the_sub_field('title'); ?></h1>
                    <div class="montserrat fs-18 lh-24 mb-30">
                       <?php the_sub_field('headline'); ?>
                    </div>
                    <div class="ml-30">
                       <a class="btn-grey" href="<?php echo get_site_url(); ?>/taxonomy-projets/creation-de-logo/">Voir les projets</a>
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
         if( have_rows('logo_content') ):
            while ( have_rows('logo_content') ) : the_row();
            ?>
            <div class="row mt-150 pb-200 logo-content align-items-end justify-content-around">
               <div class="col-xl-5 col-lg-5 col-md-12 col-12 zi-99">
                  <div class="montserrat fs-66 fw-700 ls-1 mb-30"><?php the_sub_field('subtitle'); ?></div>
                  <div class="montserrat fs-17 lh-24 mt-20 ">
                     <?php the_sub_field('content'); ?>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-12 zi-9 logo-content-img">
                  <?php
                     $image = get_sub_field('img');
                  ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
               </div>
            </div>
            <?php
            endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
      <div class="container-fluid logo-projets pt-100 pb-100">
         <div class="container mb-150">
           <div class="row justify-content-center mb-50">
             <h2 class="montserrat fs-44 text-darkpurple">Derniers projets</h2>
           </div>
           <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-8 col-12 text-center">
              <?php
              $myposts = get_posts(array(
                  'showposts' => 4,
                  'post_type' => 'projets',
                  'orderby'  => 'rand',
                  'order'     => 'ASC',
                  'tax_query' => array(
                    array(
                    'taxonomy' => 'taxonomy-projets',
                    'field' => 'slug',
                    'terms' => array('creation-de-logo'))
                   ))
                 );
                  foreach ( $myposts as $post ) : setup_postdata( $post );
                 ?>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0 pr-0 float-left projet-thumbnail">
                   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     <div class="web-tmplt-project anim-300 p-relative">
                       <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Création de logo webmaster freelance Bordeaux Poitiers Nicolas Métivier">
                       <div class="hover-web-tmplt-project text-white anim-300">
                         <span class="text-right fs-15 montserrat"><?php the_time('Y'); ?></span>
                         <h3 class="montserrat fw-600 fs-28 text-left"><?php the_title(); ?></h3>
                       </div>
                     </div>
                   </a>
                 </div>
                 <?php
                 endforeach;
                 ?>
                 <?php wp_reset_postdata();
                 ?>
              </div>
           </div>
           <div class="row justify-content-center mt-20">
             <div class="col-xl-8 col-12 text-right link-category-projets">
               <a class="mt-30 fs-18 montserrat fw-700 text-darkpurple" href="<?php echo get_site_url(); ?>/taxonomy-projets/creation-de-logo/">Voir tout les projets</a>
             </div>
           </div>
         </div>
      </div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
