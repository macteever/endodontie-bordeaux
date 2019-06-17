<?php get_header(); ?>
<main role="main" class="main-content">
  <div class="container-fluid tmplt-blog">
      <div class="container pt-150 mb-150 block-parallax">
			<div class="row tmplt-projets-title mb-15">
				<h1 class="montserrat fs-72 fw-700 ml-15 mb-10"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
         <div class="row tmplt-blog-category mb-30 pt-20 d-flex montserrat uppercase fs-14 fw-300 pl-15">
           <?php
           $terms = get_categories();
           foreach ($terms as $term){
               $term_link = get_term_link($term);
             ?>
             <div>
               <a href="<?php echo $term_link ?>" data-id="<?php; echo $term->term_id; ?>" data-slug="<?php echo $term->slug; ?>">
                 <h4 class='fs-14 fw-300 ls-2 mr-30'><?php echo $term->name; ?></h4>
               </a>
             </div>
           <?php }
           ?>
            <span class="ml-auto"><b><a href="/actualites">voir tout</a></b></span>
         </div>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="row row-templt-projets index-parallax anim-300">
				<div class="col-xl-6 col-lg-6 col-md-12 col-12 index-parallax-child">
					<a class="d-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img class="tmplt-projet-thumbnail index-thumbnail mb-30" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');" alt="Webmaster Freelance Bordeaux Poitiers Nicolas Métivier"/>
						<div class="montserrat fs-15 category d-flex justify-content-between">
                     <?php $category_detail=get_the_category();//$post->ID
                        foreach($category_detail as $cd){
                        echo $cd->cat_name;
                        }
                     ?>
                     <span class="fs-15 fw-700"><?php the_time('Y'); ?></span>
						</div>
						<h3 class="fs-36 montserrat fw-700"><?php the_title(); ?></h3>
                  <div class="montserrat fs-17 fw-300 mt-15 lh-24">
                     <?php echo excerpt(25); ?>
                  </div>
                  <div class="mt-20">
                     <a class="fs-17 btn-border-purple fw-300" href="<?php the_permalink(); ?>">Lire la suite de l'article</a>
                  </div>
               </a>
				</div>
			</div>
				<?php endwhile; ?>
			<?php endif; ?>
      </div>
  </div>
</main>

<?php get_footer(); ?>
