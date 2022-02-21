<?php
  get_header();
?>
<div class="container" style="border:0;padding:0">
	<?php while ( have_posts() ) : the_post() ?>
	<div class=" last-posts" style="background: white;margin: 5px;border: 1px solid #cccccc;border-radius: 5px;">

		<h1 class="title44" style="font-size:18px">
			<?php echo the_title(); ?>
		</h1> 
		<div class="row" >
			<div class="col-md-3" style="padding-right: 26px;padding-left: 26px;">
				<?php echo get_the_post_thumbnail() ?> 
				<h2 style="font-size:10px;font-family:tahoma;border: 1px solid #cccccc;margin-bottom: 12px;margin-top: -3px;"> 
					<i class="fas fa-user"></i>
					<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ); ?>">
						<?php echo get_the_author(); ?>
					</a>
					<br/>
					<br/>
					<i class="fas fa-envelope"></i>
					<?php echo get_the_author_meta('email') ?>
					<br/>
					<br/>
					<i class="far fa-clock"></i>
					<small> <?php d(get_the_date('H:i:s Y-m-d')); ?> </small>
				</h2>
			</div>
			<div class="col-md-9 content"  >
				<?php echo the_content(); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
</div>    

<!-- /container -->   
     
<?php
  get_footer();
?>
<script>
	window.onload = function(){
		var arabic = /[\u0600-\u06FF]/;
		if(!arabic.test($('.content').html()))$(".content").css({'text-align':'left','direction': 'ltr'});
		$('#wp-calendar').addClass('table bg-white table-bordered table-striped');
	}
</script>