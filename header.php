<!Doctype html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>   الكلية متعددة التخصصات تازة  <?php wp_title() ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="/new/wp-content/themes/7arf/library/splide-3.2.2/dist/css/splide.min.css">
        <script src="/new/wp-content/themes/7arf/library/splide-3.2.2/dist/js/splide.min.js"></script>
    </head>
    <body>
         <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="border-bottom: 1px solid #e9e7e7 !important">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img  src="https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/10/logotrans.png" style="float:right;height: 50px; "/>
            <span style="display:block;margin-top:15px;" class="d-none d-sm-block">
				الكلية متعددة التخصصات تازة  
			</span>
          </a>
          <?php
              wp_nav_menu([
                'menu'            => 'primary',
                'container'       => 'div',
                'container_id'    => 'navbarTogglerDemo01',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mr-auto',
                'depth'           => 2,
                'walker'          => new Bootstrap_NavWalker(), 
                'fallback_cb'     => 'Bootstrap_NavWalker::fallback', // For menu fallback
              ]);
          ?>
        </nav>
 <div class="container" style="direction:rtl;margin-top: 94px;padding:3px ;border-radius:5px;background:white;border: 1px solid #dbdbdb;box-shadow: 1px 1px 3px #ccc;padding-bottom: 10px;"> 
	
	 <div class="row">
		  <div class="col-md-3" id="logo-wrap" style="padding: 17px;text-align: center;">
		 	<img src="https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/657657.png" class="w-75"/>
				<form>
				  <div class="form-row align-items-center" style="direction:rtl;padding: 5px;">
					
					<div class="col">
					  <div class="input-group mb-2">
						<input type="text" class="form-control" name="s" style="width:180px;border: 1px solid #16608b" placeholder="  كلمات مفتاحية   ">
					  </div>
					</div>
					<div class="col-auto">
					  <button type="submit" class="btn btn-primary mb-2" style="background: #16608b !important;color: #f2f5f7 !important;border: 1px solid #3e2d2d;">بحث</button>
					</div>
				  </div>
				</form>
			
		 </div>
		 <div class="col-md-9">
		 	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding: 10px;">
			  <div class="carousel-inner">
				<?php
				$sticked  = get_posts(array('posts_per_page' => 5,'post__in' => get_option( 'sticky_posts' )));
					 //print_r($sticked);
					 for( $j=0;$j<count($sticked);$j++ ):
						 setup_postdata($sticked[$j] ); 
				  ?>
					<div class="carousel-item  <?php if($j==0)echo "active"?>">
						<a href="<?php echo $sticked[$j]->guid ?>">
						<img class="d-block w-100" src="<?php echo $sticked[$j]->post_excerpt ?>" alt="First slide">
						</a>
					</div>
				  <?php
				  	 wp_reset_postdata($sticked[$j]);
					 endfor;
				  ?>
				 
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		 </div>
	 </div>
     
		</div>
		 
