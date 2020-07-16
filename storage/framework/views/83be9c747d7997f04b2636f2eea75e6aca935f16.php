<?php $__env->startSection('title', __('Home')); ?>

<?php $__env->startSection('main_content'); ?>

<section class="w3l-cover-3" >
		<div class="cover top-bottom">
			<div class="wrapper">
				<div class="middle-section text-center">
					<div class="section-width">
						<h2 style="font-weight: bold">Centangle Interactive</h2>
						<p>We are a young motivated team of geeks working out of Islamabad, Pakistan. We are here to cater the digital needs of your organization by using affordable evolving technologies and latest industry standards.</p>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="w3l-grids-block-5">
	<!-- companies20 -->
<section id="grids5-block">
			<h3 class="heading">What do we do?</h3>
			<div class="wrapper">
				<div class="d-grid">
					<div class="grids5-info">
						<a href="blog-single.html"><img src="<?php echo asset('homepage/images/blog1.jpg'); ?>" alt="" /></a>
						<div class="blog-info">
							
							<h4><a href="blog-single.html">Software</a></h4>
							<p>We develop custom software solutions. Our expertise includes development of large Enterprise Resource Planning software (ERP), Management Information Systems (MIS), and small desktop utility software.</p>
						</div>
					</div>
					<div class="grids5-info">
						<a href="blog-single.html"><img src="<?php echo asset('homepage/images/blog2.jpg'); ?>" alt="" /></a>
						<div class="blog-info">
						
							<h4><a href="blog-single.html">Web</a></h4>
							<p>Our web development team crafts beautiful yet responsive websites and web applications based on either an existing or a custom CMS that will help address your business needs using the power of the world wide web.</p>
						</div>
					</div>
					<div class="grids5-info">
						<a href="blog-single.html"><img src="<?php echo asset('homepage/images/blog3.jpg'); ?>" alt="" /></a>
						<div class="blog-info">
							
							<h4><a href="blog-single.html">Digital</a></h4>
							<p>Our team of digital media marketers can take your internet marketing, Search Engine Optimization (SEO) and Social Media Marketing (SMM) campaigns to the next leve.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- //companies20 -->
	</div>

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>

	<!-- w3l-covers-14 -->
	<section class="w3l-covers-14">
		<div id="covers14-block">
			<div class="wrapper">
				<div class="covers14-text">
					<h4>Want to join Us? </h4><br>
					
					<a class="actionbg" href="<?php echo route('jobs'); ?>"> See Latest Jobs</a>
					
				</div>
			</div>
		</div>
	</section>
	<!-- w3l-covers-14 -->
	
	<script>
		var e = document.getElementById("filt-monthly"),
			d = document.getElementById("filt-hourly"),
			t = document.getElementById("switcher"),
			m = document.getElementById("monthly"),
			y = document.getElementById("hourly");

		e.addEventListener("click", function () {
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});

		d.addEventListener("click", function () {
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});

		t.addEventListener("click", function () {
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		})
	</script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>

	
	<!-- //w3l-content-photo-5 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>

	<div class="w3l-grids-block-5">
		<!-- grids block 5 -->
		
			<section class="w3l-companies-20">
		<div class="companies20">
			<h3 class="heading">How does Centangle give back to the community?</h3>
			<div class="wrapper">
				<div class="companies20-content">
					<div class="companies-wrapper">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<h3> 2</h3>
								<p>Organization Supported</p>
								<span class="pos-icon">
									<span class="fa fa-handshake-o"></span>
								</span>
							</div>
							<div class="item">
								<h3>160k+</h3>
								<p>Rupees paid in charity</p>
								<span class="pos-icon">
									<span class="fa fa-money"></span>
								</span>
							</div>
							<div class="item">
								<h3> 25</h3>
								<p>Deserving kids trained</p>
								<span class="pos-icon">
									<span class="fa fa-laptop"></span>
								</span>
							</div>
							<div class="item">
								<h3> 3</h3>
								<p>Trees planted</p>
								<span class="pos-icon">
									<span class="fa fa-tree"></span>
								</span>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
	<!-- // grids block 5 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<!-- app-4 -->
	<section class="w3l-app-launch-4">
		<div id="app4-block">
			<div class="wrapper">
				<div class="d-grid parent-flex">
					<div class="app4-left-text">
					
							<div class="app-4-icon">
								<ul>
									<li><a href="https://twitter.com/centangle" target="_blank" title="Apple" class="app-icon apple-vv"><span class="fa fa-twitter"
												aria-hidden="true"></span></a></li>
									<li><a href="https://www.facebook.com/centangle" target="_blank" title="Google play" class="app-icon play-vv"><span
												class="fa fa-facebook" aria-hidden="true"></span></a></li>
									<li><a href="https://www.instagram.com/centangle" target="_blank" title="Microsoft" class="app-icon windows-vv"><span
												class="fa fa-instagram" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>