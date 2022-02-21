<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">  فضاء الطالب <i class="fas fa-book-reader"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		   
		   <a href="https://fpt.usmba.ac.ma/student/public/login">طلبة الإجازة</a>
		  <br/><br/>
		  <a href="https://fpt.usmba.ac.ma/student2/public/login">طلبة الماستر</a>
        
      </div>
      <div class="modal-footer">
         
      </div>
    </div>
  </div>
</div>
<footer>
        <div class="top">
            <div class="row">
				<div class="col-md-3"  style="padding: 0 40px 0 40px;font-size: 12px;">
				  <h1 style="margin:10px;font-size:12px;text-align:right"> :عرض الإعلانات حسب </h1>
						 <ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="far fa-calendar-alt"></i> التاريخ </a>
						  </li>
						  <li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user"></i>  الناشر </a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							 <?php
								echo get_calendar(); 
							  ?>
						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							  <div style="overflow-y: scroll;background: #fff;height: 236px;">
								  <?php
									  list_authors();
									?>
							  </div>
						  </div>
						</div>
                </div>
              <div class="col-md-6">
				  <?php echo get_option('site_gmaps') ?>
				  
              </div>
               <div class="col-md-3">
					<i class="fas fa-mail-bulk" style="font-size:28px;margin:10px"></i>
                 	<br/>
					<span id="contact"> إتصل بنا</span>
				<ul style="direction: ltr;list-style: none;font-size:12px">    
                    <li><span><i class="fas fa-map-marker-alt"></i></span> <?php echo get_option('site_adresse') ?> </li>
                    <li><span><i class="fas fa-phone"></i></span> <?php echo get_option('site_tel') ?> </li>
					<li><span><i class="fas fa-fax"></i></span> <?php echo get_option('site_fax') ?></li>
                    <li> <i class="fas fa-envelope"></i> <?php echo get_option('site_email') ?>   </li>
                  </ul>
					<div style="text-align:center;margin:0px;font-size:20px">
						<a href="<?php echo get_option('site_youtube') ?>" target="_blank">
							<i class="fab fa-youtube" style="color:#c10808"></i>
						</a>
						<a href="<?php echo get_option('site_facebook') ?>" target="_blank">
							<i class="fab fa-facebook" style="color:#121276"></i>
						</a>
						<br/>
						<span style="font-family:tahoma;font-size:14px">
						تطبيق أندرويد فضاء الطالب 
							<br/>
							متوفر على كوكل بلاي 
						</span><br/>
						<a href="<?php echo get_option('site_android') ?>">
							<img src="https://fpt.usmba.ac.ma/new/wp-content/uploads/2021/12/unnamed.png" style="width: 142px;margin-top: 5px;" />
						</a>
					</div>
                </div>
            </div>
        </div>
        <div class="bottom">
             <span style="font-size:12px;font-family:tahoma">   
				   2021 &copy; الكلية متعددة التخصصات تازة  |  تصميم خلية البرمجة - مصلحة الإعلاميات
          	</span>
        </div>
</footer>

<div id="toup">
	<a href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
		<i class="fas fa-caret-up"></i>
	</a>
	<br/>
	<a href="#" onclick="$('html, body').animate({ scrollTop: document.body.scrollHeight }, 'fast');">
		<i class="fas fa-caret-down"></i>
	</a>
	<br/>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script!-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-538YQWFTMQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-538YQWFTMQ');
</script>
<script>
	window.onload = function(){
		$('#wp-calendar').addClass('table bg-white table-bordered table-striped')
	}
</script>
</body>
</html>
