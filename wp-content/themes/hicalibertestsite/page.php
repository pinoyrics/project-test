<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();
?>
<div class="row">
	<section id="<?php echo section_settings('customID'); ?>" class="page_section<?php echo section_settings('customClass'); ?>">
    	<div class="container">
        	<div class="page_titles">
				<?php if( get_field('main_title') ) : ?>
                    <h1><?php the_field('main_title'); ?></h1>
                <?php endif; ?>
                
                <?php if( get_field('main_subtitle') ) : ?>
                    <h2 style="margin-bottom: 40px;"><?php the_field('main_subtitle'); ?></h2>
                <?php endif; ?>
            </div>
            
            <div class="post_filter">
            	<?php $categories = get_categories(); ?>
                
                <div class="button-group filters-button-group">
                	<button class="button is-checked" data-filter="*">All</button>
					<?php foreach( $categories as $category ) { ?>
                        <button class="button is-checked" data-filter=".<?php echo $category->slug ?>"><?php echo $category->name ?></button>
                    <?php } ?>
                </div>
            </div>
            
			<?php 
			$col = get_field('number_of_column'); 
			$post_layout = get_field('featured_image_position_1'); 
			if( get_field('choose_post_to_display')  == "featured" ) :
				$args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'meta_key' => 'make_post_as_featured', 'meta_value' => '1' );
           	 	$loop = new WP_Query($args);
				include 'post_contents.php';
			else :
				$args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1);
           	 	$loop = new WP_Query($args);
				include 'post_contents.php';
			endif; ?>
            
        </div>
    </section>
</div><!-- /.row -->
<?php
get_footer();
