<?php
/**
 * Template Name: Search Page
 */
  get_header();
?>
    <div class="container"  style="border:0;background:white">              
        <div class="box">
                <h1 class="title44">
					نتائج البحث
					<i class="fas fa-search"></i>
				</h1>
				
                <div class="last-posts" style="padding:20px">
					<ul>
					<?php while ( have_posts() ) : the_post() ?>
                          <li>
							  <h2>
									<small>  <?php echo get_the_date('d/m/Y h:i:s')  ?></small>
							  </h2>
							  <h1 style="padding:0px;font-family: Arial">
								  <a href="<?php echo the_permalink() ?>">
									  <?php echo the_title(); ?>
								  </a>
							  </h1>  
                          </li>
					<?php endwhile; ?>
					</ul>
                </div>   
          </div>
      </div>    
    
     
    <!-- /container -->   
     
 <div style="text-align:center;padding: 30px;">
	<?php
		echo paginate_links();
	?>
</div>    
<?php
  get_footer();
?>