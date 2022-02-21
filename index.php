<?php
  get_header();
?>
<div class="container" style="direction:rtl;padding:0;border-radius:5px;background:white;border:1px solid #dbdbdb;box-shadow: 1px 1px 3px #ccc;"> 
	 
	
	  <?php
		if(function_exists("plugin_mymenu_output")){
			plugin_mymenu_output();
		}	
	  ?>
		
	  <div style="text-align:center;margin-top:15px;margin-bottom:25px">
		  <a href="<?php echo get_day_link(false, false, false); ?> " alt=""  class="categories">Aujourd'hui</a>
		 <?php
	 	 
			$categories = get_categories( array('orderby' => 'name','order'   => 'ASC'));

			foreach( $categories as $category ) {
				$category_link = sprintf( 
					'<a href="%1$s" alt="%2$s"  class="categories">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					esc_html( $category->name )
				);
				echo $category_link;
			}
		
	 ?>
	 </div>
	 
</div>
<div class="container" style="padding:0;border:0">
		<div class="box">
			<div style="">
				<h1 class="head">
					آخر الإعلانات
				<i class="far fa-clock"></i>
				</h1>
				<div id="splide1" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20
								));
							
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								   </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
									 <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small>
										<?php
											d($activites[$j]->post_date); 
										?>
										</small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;  
								}
							  ?>  
						</ul>
				  </div>
				</div>
			</div>
		</div>
		<!-- actualites -->
		<div class="box">
			<div>
				<h1 class="head">
					 خاص بسلك الإجازة
		<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID('licence')); ?>">
						
						عرض الكل
					<i class="fas fa-search"></i>
					</a>
					 <i class="fas fa-book-reader"></i>
				</h1>	
				 
				<div id="splide2" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('licence')
								));
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
									   <h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
										 <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php d($activites[$j]->post_date);  ?> </small>
									</h2>
									 
								</div>
								</div>
							</li>
							 <?php
							wp_reset_postdata($activites[$j]);
							endfor;  
							}
						  ?>  
						</ul>
				  </div>
				</div>
				 
			</div>
		</div>
		
         <div class="box">
			<div>
					<h1  class="head">
						 خاص بسلك الماستر
					<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID( 'master' )); ?>">
						
						عرض الكل
					<i class="fas fa-search"></i>
						</a>
						 <i class="fas fa-graduation-cap"></i>
					</h1>	
				 
				<div id="splide3" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('master')
								));
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
										  <i class="fas fa-user"></i> 
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php d($activites[$j]->post_date); ?> </small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
							wp_reset_postdata($activites[$j]);
							endfor;  
							}
						  ?>  
						</ul>
				  </div>
				</div>
				 
			</div>
		</div>
			<!-- actualites -->
		 <div class="box">
			<div >
					<h1  class="head">
						ندوات و مؤتمرات
				<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID( 'conferences' )); ?>">
					
						عرض الكل
					<i class="fas fa-search"></i>
						</a>
						<i class="fas fa-chalkboard-teacher"></i>
				</h1>	
				 
				<div id="splide49" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('conferences')
								));
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
										  <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php d($activites[$j]->post_date); ?> </small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;  
								}
							  ?>  
						</ul>
				  </div>
				</div>
			 
			</div>
		</div>
        <!-- actualites -->
        <!-- actualites -->
		 <div class="box">
			<div>
					<h1  class="head">
						  تكوينات مستمرة
				<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID( 'formation continue' )); ?>">
					
						عرض الكل
					<i class="fas fa-search"></i>
						</a>
						<i class="fas fa-book-reader"></i>
				</h1>	
				 
				<div id="splide4" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('formation continue')
								));
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
										  <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php echo d($activites[$j]->post_date); ?> </small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;  
								}
							  ?>  
						</ul>
				  </div>
				</div>
				 
			</div>
		</div>
        <!-- actualites -->
		 <!-- recrutement -->
		 <div class="box">
			<div >
				 
					<h1  class="head">
						 مباريات التوظيف
 				<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID( 'recrutement' )); ?>">
					
						عرض الكل
					<i class="fas fa-search"></i>
						</a>
					<i class="fas fa-briefcase"></i>
				</h1>	
				<?php
				$activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('recrutement')
								));
							if ( $activites ) {
				?>
				<div id="splide5" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px "> 
										  <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php echo d($activites[$j]->post_date); ?> </small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;
							  ?>  
						</ul>
				  </div>
				</div>
				<?php
					}else{
						echo"<div style='color:gray;padding:40px;text-align:center'>
						لا يوجد
						<i class='far fa-frown'></i>
						</div>";
					}
				?>
			 
			</div>
		</div>
        <!-- recrutement -->
		<!-- annonces -->
		 <div class="box">
			<div >
				 
					<h1  class="head">
						 إعلانات غير مصنفة
 				<a style="font-size:14px;float:left" href="<?php echo  get_category_link( get_cat_ID( 'Non classé' )); ?>">
					
						عرض الكل
					<i class="fas fa-search"></i>
						</a>
					<i class="fas fa-scroll"></i>
				</h1>	
				<?php
				$activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('Non classé')
								));
							if ( $activites ) {
				?>
				<div id="splide25" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<?php
							   
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h1 style="margin-top:10px;font-family: Arial;text-align: center; ">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h1>
									<h2 style="font-size:10px; "> 
										  <i class="fas fa-user"></i>
										<a style="font-size:11px;font-family: tahoma;" href="<?php echo get_author_posts_url($activites[$j]->post_author); ?>">
						<?php echo get_the_author_meta( 'display_name', $activites[$j]->post_author ); ?>
										</a>
										<br/><br/>
										 <i class="far fa-clock"></i>
										 <small> <?php d($activites[$j]->post_date); ?> </small>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;  
								
							  ?>  
						</ul>
				  </div>
				</div>
				<?php
					}else{
						echo"<div style='color:gray;padding:40px;text-align:center'>
						لا يوجد
						<i class='far fa-frown'></i>
						</div>";
					}
				?>
			 
			</div>
		</div>
        <!-- annonceces generales -->
		 
</div>



<div class="container" style="text-align:center; color:#4d5a93;background:white;box-shadow: 1px 1px 3px #ccc; ">
	<h1 style="margin:0px 10px 10px 10px;font-size:20px">
		<a href="<?php echo  get_category_link( get_cat_ID( 'vidéos' )); ?>">مكتبة المرئيات</a>
		<small style="font-size:10px"> <a href="<?php echo get_option('site_youtube') ?>">قناتنا على اليوتيب</a></small>
		<i class="fas fa-film"></i>
	</h1>
	<div id="splide11" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">    
							<?php
							   $activites = get_posts(array(
								  'posts_per_page' => 20,
								  'category'       => get_cat_ID('vidéos')
								));
							if ( $activites ) {
							  for( $j=0;$j<count($activites);$j++ ) :
								setup_postdata( $activites[$j] ); 
							?>    
							<li class="splide__slide">
								<div class="last-posts" style="margin:10px;background:white">
									<a href="<?php echo $activites[$j]->guid; ?>">
									<?php 
										$img = get_the_post_thumbnail($activites[$j]->ID,'medium', 
																	array( 'class' => 'w-100' )); 
										if($img){
											echo $img;
										}else{
											echo"<img src='https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/telechargement-1.png' class='w-100' />";
										}
									?> 
								  </a>
								   <div class="resume">
 									<h2 style="font-weight:bold;margin-top:10px;font-family: Arial;text-align:center">
										<a href="<?php echo $activites[$j]->guid; ?>">
										 <?php echo $activites[$j]->post_title; ?>
										</a>
									</h2>
								</div>
								</div>
							</li>
							 <?php
								wp_reset_postdata($activites[$j]);
								endfor;  
								}
							  ?>  
						</ul>
				  </div>
				</div>
</div>



<script>
document.addEventListener( 'DOMContentLoaded', function() {
p1 = 5;
p2 = 3;
if($(document).width()<=960){
	p1=4;
	p2=3; 
}
if($(document).width()<=720){
	p1=2;
	p2=2; 
}
if($(document).width()<=540){
	p1=1;
	p2=1; 
}

if($("#splide1").length)new Splide( '#splide1', {perPage: p1,rewind : true,direction:'rtl'}).mount();
if($("#splide2").length)new Splide( '#splide2', {perPage: p1,rewind : true,direction:'rtl'}).mount();
if($("#splide3").length)new Splide( '#splide3', {perPage: p1,rewind : true,direction:'rtl'}).mount();
if($("#splide4").length)new Splide( '#splide4', {perPage: p1,rewind : true,direction:'rtl'}).mount();
if($("#splide5").length)new Splide( '#splide5', {perPage: p1,rewind : true,direction:'rtl'}).mount();
if($("#splide10").length)new Splide( '#splide10', {perPage: p1 ,rewind : true,direction:'ltr'}).mount();
if($("#splide25").length)new Splide( '#splide25', {perPage: p1 ,rewind : true,direction:'rtl'}).mount();
if($("#splide49").length)new Splide( '#splide49', {perPage: p1 ,rewind : true,direction:'rtl'}).mount();
if($("#splide11").length)new Splide( '#splide11', {perPage: p1 ,rewind : true,direction:'rtl'}).mount();

});
</script>
			<style>
				.number{
					font-weight:bold;
					font-size:40px;
				}
			</style>
			<script>
			var end = new Date('<?php  echo get_option('site_cr_date') ?>');

			var _second = 1000;
			var _minute = _second * 60;
			var _hour = _minute * 60;
			var _day = _hour * 24;
			var timer;

			function showRemaining() {
				var now = new Date();
				var distance = end - now;
				if (distance < 0) {

					clearInterval(timer);
					document.getElementById('days').innerHTML = 0;
					document.getElementById('hours').innerHTML = 0;
					document.getElementById('minutes').innerHTML = 0;
					document.getElementById('secondes').innerHTML = 0;

					return;
				}
				var days = Math.floor(distance / _day);
				var hours = Math.floor((distance % _day) / _hour);
				var minutes = Math.floor((distance % _hour) / _minute);
				var seconds = Math.floor((distance % _minute) / _second);

				document.getElementById('days').innerHTML = days;
				document.getElementById('hours').innerHTML = hours;
				document.getElementById('minutes').innerHTML = minutes;
				document.getElementById('secondes').innerHTML = seconds;
			}

			timer = setInterval(showRemaining, 1000);
		</script>
        <?php if(get_option('site_di_affichage')=="Oui"): ?>
		<section class="container" style="background: white;text-align:center;">
			<h1 style="margin:12px 10px 24px 10px;font-size:20px;color:#4d5a93;"> 
				تواريخ هامة
				<small style="font-size:10px">آخر تحديث <?php echo get_option('site_di_maj') ?></small>
				<i class="far fa-clock"></i>
			</h1>
			<div class="row">
				<?php if(get_option('site_cr_affichage')=="Oui"): ?>
				<div class="col-md-4">
					<h1 style="margin-bottom: 16px;color: #4d5a93;margin-top: 20px;">
						<?php  echo get_option('site_cr_titre') ?>
					</h1>
					<div class="row" style="font-family:tahoma;color:#555">
						<div class="col">أيام</div>
						<div class="col">ساعات</div>
						<div class="col">دقائق</div>
						<div class="col">ثواني</div>
					</div>
					<div class="row" style="color: #4d5a93;margin-bottom:20px">
						<div class="col number" id="days">0</div>
						<div class="col number" id="hours">0</div>
						<div class="col number" id="minutes">0</div>
						<div class="col number" id="secondes">0</div>
					</div>
				</div>
				<?php endif; ?>
				<?php if(get_option('site_cr_affichage')=="Oui"): ?>
				<div class="col-md-8" style="font-family:tahoma">
				<?php else: ?>
				<div class="col-md-12" style="font-family:tahoma">
				<?php endif; ?>
				<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">الدورة الخريفية</a>
					<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">الدورة الربيعية</a>

				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					  <div class="table-responsive">
					  <table class="table table-bordered table-striped" style="font-size:14px;direction: rtl;">
						<thead>
							<tr>
								<th>بداية الدراسة</th>
								<th>توقف الدراسة</th>
								<th>امتحانات الدورة الخريفية</th>
								<th>مراجعة نقط الامتحان</th>
								<th>الجواب على مراجعة نقط الامتحان</th>
								<th>امتحانات الدورة الخريفية الاستدراكية</th>
 							</tr> 
						</thead>
						<tbody>
							<tr>
								<td><?php echo get_option('site_fc_di_a_debutetude') ?></td>
								<td><?php echo get_option('site_fc_di_a_finetude') ?></td>
								<td><?php echo get_option('site_fc_di_a_examen') ?></td>
								<td><?php echo get_option('site_fc_di_a_revue') ?></td>
								<td><?php echo get_option('site_fc_di_a_reprevue') ?></td>
								<td><?php echo get_option('site_fc_di_a_rattrapage') ?></td>
 							</tr>
						</tbody>
					</table>
					  </div>
				  </div>
				  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					  <div class="table-responsive">
					  <table class="table table-bordered table-striped" style="font-size:14px;direction: rtl;">
						  <thead>
							  <tr>
								  <th>بداية دروس الدورة الربيعية</th>
								  <th>توقف الدراسة</th>
								  <th>امتحانات الدورة الربيعية</th>
							   	  <th>مراجعة نقط الامتحان</th>
								  <th>الجواب على مراجعة نقط الامتحان</th>
								 <th>امتحانات الدورة الربيعية الاستدراكية</th>
							  </tr> 
						  </thead>
						  <tbody>
							  <tr>
								<td><?php echo get_option('site_fc_di_p_debutetude') ?></td>
								<td><?php echo get_option('site_fc_di_p_finetude') ?></td>
								<td><?php echo get_option('site_fc_di_p_examen') ?></td>
								<td><?php echo get_option('site_fc_di_p_revue') ?></td>
								<td><?php echo get_option('site_fc_di_p_reprevue') ?></td>
								<td><?php echo get_option('site_fc_di_p_rattrapage') ?></td>
 							</tr>
						  </tbody>
					  </table>
					</div>
					</div>
				 </div>
					
	 
				</div>
				
			</div>
			
		</section>
	<?php endif; ?>
 <?php if(get_option('site_fc_affichage')=="Oui"): ?>
<div class="container" style="text-align:center;padding:36px;color:#4d5a93;padding-bottom: 46px;background-image: url(https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/graph-scaled.jpg);background-size: 165%;box-shadow: 1px 1px 3px #ccc;">
	<h1 style="margin:0px 10px 10px 10px;font-size:20px">
		الكلية بالأرقام
		<small style="font-size:10px">آخر تحديث <?php echo get_option('site_fc_maj') ?></small>
		<i class="fas fa-chart-line"></i>
	</h1>
	<div id="splide10" class="splide">
				  <div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
							  
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_licence_etudiants') ?>
									</h1>
									<p class="chiffre-text">
										 عدد الطلبة في الإجازة
									</p>
							</li>
							<li class="splide__slide">
							  
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_master_etudiants') ?>
									</h1>
									<p class="chiffre-text">
										عدد الطلبة في الماستر
									</p>
							</li>
							 
							<li class="splide__slide">
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_filieres') ?>
									</h1>
									<p class="chiffre-text">
										عدد المسالك
									</p>
								</li>
							<li class="splide__slide">
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_masters') ?>
									</h1>
									<p class="chiffre-text">
										ماستر
									</p>
								</li>
							<li class="splide__slide">
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_professeurs') ?>
									</h1>
									<p class="chiffre-text">
										أساتذة باحثين
									</p>
								</li>
							<li class="splide__slide">
									<h1 style="font-size:30px" class="chiffre">
										<?php echo get_option('site_fc_cadres') ?>
									</h1>
									<p class="chiffre-text">
										أطر تقنية وإدارية
									</p>
							</li>
						</ul>
				  </div>
			</div>
</div>
<?php
	endif;
  get_footer();
?>