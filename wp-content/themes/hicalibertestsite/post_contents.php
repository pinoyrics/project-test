<div class="page_alignment isotope">
	<?php while ( $loop->have_posts() ) : $loop->the_post();
          $categories = get_the_category(); 
          foreach( $categories as $category ) {
              $post_cat_slug = $category->slug;
              $post_cat_name = $category->name;
          } ?>
          <div class="page_col_<?php echo $col; ?> element-item <?php  echo $post_cat_slug ?>">
              <?php if( $post_layout == "top" ) {?>
                  <div class="post_layout" style="padding: 20px;">
                      <?php if( has_post_thumbnail() ) { ?>
                          <div class="featured_image lazy" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
                      <?php } else { ?>
                          <div class="featured_image lazy" data-bg="<?php echo content_url('/themes/hicalibertestsite-child/images/dummy-image-square.jpg') ?>"></div>
                      <?php } ?>
                      <h3><?php the_title(); ?></h3>
                      <?php echo excerpt(20); ?>
                      <a href="<?php the_permalink(); ?>">Read More</a>
                  </div>
              <?php } else { ?>
                  <div class="post_layout flex_column" style="padding: 10px;">
                      <?php if( has_post_thumbnail() ) { ?>
                          <div class="featured_image lazy post_col" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
                      <?php } else { ?>
                          <div class="featured_image lazy post_col" data-bg="<?php echo content_url('/themes/hicalibertestsite-child/images/dummy-image-square.jpg') ?>"></div>
                      <?php } ?>
                      <div class="post_text post_col">
                          <h3><?php the_title(); ?></h3>
                          <?php echo excerpt(20); ?>
                          <a href="<?php the_permalink(); ?>">Read More</a>
                      </div>
                  </div>
              <?php } ?>
          </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>