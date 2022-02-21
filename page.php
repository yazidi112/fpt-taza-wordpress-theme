<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

        <div class="container" style="background: white;padding-top: 15px;border:0px;margin-bottom: 40px">
             
                    <div class="box">
                        <?php
        
            			/* Start the Loop */
            			while ( have_posts() ) :
            				the_post();
            				get_template_part( 'template-parts/content/content', 'page' );
                        ?>
                            <h2 class="title44"><?php the_title(); ?></h2>
                            <div class="page-content">
								<?php the_content(); ?>
							</div>
                        <?php
            				endwhile; // End of the loop.
            			?>
                   </div>
                 
		</div>

<?php
get_footer();
