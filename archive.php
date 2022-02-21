<?php
  get_header();
?>
    <div class="container" style="background:white;box-shadow: 1px 1px 3px #ccc;">
		<div class="row last-posts">
			<?php while ( have_posts() ) : the_post() ?>
			<div class="col-md-3">
				<a href="<?php echo the_permalink() ?>">
					<?php echo get_the_post_thumbnail() ?> 
				</a>
				<div>
					<h1 style="font-family: Arial;text-align:center;border:1px solid #ccc;margin-top: -4px;">
						<a href="<?php echo the_permalink() ?>">
							<?php echo the_title(); ?>
						</a>
					</h1>
					<h2 style="font-size:10px;font-family:tahoma;border: 1px solid #cccccc;margin-bottom: 12px;margin-top: -3px;background: #f1f1f1;"> 
					<i class="fas fa-user"></i>
					<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ); ?>">
						<?php echo get_the_author(); ?>
					</a>
					<br/>
					<br/>
					<i class="far fa-clock"></i>
					<small> <?php   d(get_the_date('H:i:s Y-m-d')); ?> </small>
				</h2>
				</div>
			</div>
			<?php endwhile; ?>
		</div>    
          
      
    </div> 
	<div style="text-align:center;padding: 30px;">
		<?php
			echo paginate_links();
		?>
	</div>

    <!-- /container -->   
     
<?php
  get_footer();
?>