<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
<?php require_once('banner.php'); ?>

	<!-- services -->
	<div class="padding-b-100">
		<div class="padding-t-100 margin-b-100">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
						<div class="margin-b-50 center-text">
							<img src="dist/img/logo-simplemedia-outlined.svg">
						</div>
						<div class="heading font-f-simplifica">We find creative ways to help our clients solve tough digital challenges.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0 heading font-f-simplifica">Our Core Services</div>
                <?php 
				
				$services = $cosmicjs->getServices();
				print_r($services);
				foreach($services as $service)
				{
				?>
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 service margin-t-50">
					<div class="margin-b-30">
						<img class="service__img" src="dist/img/illustration-branding.svg" alt="Branding">
					</div>
					<div class="margin-b-20">
						<div class="font-c-teal1 font-f-sansation">Branding and Creative</div>
						<div class="margin-b-10 font-f-sansation"><span class="font-c-grey2">Starting at</span> $895</div>
						<div class="font-s-l">Strategy, Brand Identity, and Collateral</div>
					</div>
					<a href="" class="button-icon">
						<div class="button-icon__wrap">
							<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-browser" />
							</svg>
							<div class="padding-l-10 font-f-sansation font-c-teal1 font-s-xxs">View Sample</div>
						</div>
					</a>
					<div class="margin-t-30 center-text">
						<a href="http://smstaging.net/simplemedia-new/order.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Pricing</a>
					</div>
				</div>
				<?php } ?>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 service margin-t-50">
					<div class="margin-b-30">
						<img class="service__img" src="dist/img/illustration-web.svg" alt="Branding">
					</div>
					<div class="margin-b-20">
						<div class="font-c-teal1 font-f-sansation">Web Design and Development</div>
						<div class="margin-b-10 font-f-sansation"><span class="font-c-grey2">Starting at</span> $1895</div>
						<div class="font-s-l">UIX Design, Frontend and Backend Development</div>
					</div>
					<a href="" class="button-icon">
						<div class="button-icon__wrap">
							<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-browser" />
							</svg>
							<div class="padding-l-10 font-f-sansation font-c-teal1 font-s-xxs">View Sample</div>
						</div>
					</a>
					<div class="margin-t-30 center-text">
						<a href="http://smstaging.net/simplemedia-new/order.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Pricing</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 service margin-t-50">
					<div class="margin-b-30">
						<img class="service__img" src="dist/img/illustration-marketing.svg" alt="Branding">
					</div>
					<div class="margin-b-20">
						<div class="font-c-teal1 font-f-sansation">Online Marketing</div>
						<div class="margin-b-10 font-f-sansation"><span class="font-c-grey2">Starting at</span> $500 a month</div>
						<div class="font-s-l">Google Adwords, Bing &amp; Facebook Ads and SEO</div>
					</div>
					<a href="" class="button-icon">
						<div class="button-icon__wrap">
							<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-browser" />
							</svg>
							<div class="padding-l-10 font-f-sansation font-c-teal1 font-s-xxs">View Sample</div>
						</div>
					</a>
					<div class="margin-t-30 center-text">
						<a href="http://smstaging.net/simplemedia-new/order.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Pricing</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services -->

	<!-- works -->
	<div class="padding-t-100 background-c-grey4">
		<div class="container margin-b-50">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0 heading font-f-simplifica">Our Worksz</div>
			</div>
		</div>
		<div class="image-grid js">
		<div class="image-grid__item image-grid__item-sizer"></div>
		<?php
//$config->object_type = 'our-works';
//include("cosmicjs.php");
	//echo "dsa";
	
	
	$objects = $cosmicjs->getObjectType();
	print_r($objects);
			//echo "here";
			//print_r($objects);
			$header_image ='';
		$services = '';
		$aspect_ratio =  '';
		$extra_classes = '';
		//print_r($objects);
	foreach($objects as $data1)
	{
		//echo $data1->slug;
		
		foreach($data1 as $meta1)
			{
				
				
				
				foreach($meta1->metafields as $head_image)
				{
				//print_r($head_image);
				
					$test = (array)$head_image;
					
					if($test['key']=='header_image')
					{
						//echo $test['url'];
					//print_r($test);
					$header_image = $test['url'];
					}
						if($test['key']=='services')
					{
					//	print_r($test);
					$services = $test['value'];
					}
					
					if($test['key']=='aspect_ratio')
					{
					//	print_r($test);
					$aspect_ratio =  $test['value'];
					}
						if($test['key']=='extra_classes')
					{
					//	print_r($test);
					$extra_classes =  $test['value'];
					}
					
				}
					
			
		?>
       <a href="work-detail.php?slug=<?php echo $meta1->slug; ?>" class="image-grid__item <?php echo $aspect_ratio; ?> <?php echo $extra_classes; ?>" style="background: url(<?php echo $header_image; ?>) no-repeat center / cover"></a>
			
		
			<?php
				
			}
		
	}

			?>
		</div>
	</div>
	<!-- works -->

	<!-- brands -->
	<div class="padding-t-100">
		<div class="container margin-b-50">
			<div class="heading font-f-simplifica">Brands served</div>
		</div>
		<div class="image-grid image-grid--brand image-grid--flex image-grid--container">
			<div class="image-grid__item white">
				<img src="dist/img/logo-tetra.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item grey">
				<img src="dist/img/logo-optimalblue.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item grey">
				<img src="dist/img/logo-kickbox.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item white">
				<img src="dist/img/logo-adestra.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item white">
				<img src="dist/img/logo-muv.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item grey">
				<img src="dist/img/logo-immerss.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item grey">
				<img src="dist/img/logo-techwildcatters.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item white">
				<img src="dist/img/logo-mydirectives.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item white">
				<img src="dist/img/logo-sunstone.svg" class="image-grid__img">
			</div>
			<div class="image-grid__item grey">
				<img src="dist/img/logo-cibodivino.svg" class="image-grid__img">
			</div>
		</div>
	</div>
	<!-- brands -->

	<!-- testimonials -->
	<div class="padding-t-100 padding-b-100 background-c-grey4">
		<div class="container">
			<div class="slick-testimonial js">
				<div class="testimonial">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-4">
							<div class="testimonial__quote center-block margin-b-50"><img src="dist/img/quote.svg"></div>
							<div class="testimonial__img-wrap center-block margin-b-50">
								<img class="testimonial__img" src="dist/img/logo-techwildcatters.svg">
							</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8">
							<div class="margin-b-50">In Part Three, I promised we would get into the resources. Before we do, however, let’s discuss a treasure that most of us have been exposed to, but don’t take nearly enough time out of our day to focus on – the power of prayer. This may offend some people, but I hope it does not; as that is not my intent.</div>
							<div class="font-f-sansation">
								<div class="font-c-teal1 margin-b-10">Adelaide Greene</div>
								<div class="font-s-xs">CEO <span class="font-c-grey3">|</span> Founder</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-4">
							<div class="testimonial__quote center-block margin-b-50"><img src="dist/img/quote.svg"></div>
							<div class="testimonial__img-wrap center-block margin-b-50">
								<img class="testimonial__img" src="dist/img/logo-kickbox.svg">
							</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8">
							<div class="margin-b-50">In Part Three, I promised we would get into the resources. Before we do, however, let’s discuss a treasure that most of us have been exposed to, but don’t take nearly enough time out of our day to focus on – the power of prayer. This may offend some people, but I hope it does not; as that is not my intent.</div>
							<div class="font-f-sansation">
								<div class="font-c-teal1 margin-b-10">Adelaide Greene</div>
								<div class="font-s-xs">CEO <span class="font-c-grey3">|</span> Founder</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonials -->

<?php require_once('footer.php'); ?>