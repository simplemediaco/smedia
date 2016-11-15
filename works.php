<?php //dddrequire_once('header.php'); ?>
<?php //require_once('navigation.php'); ?>
<?php require_once('banner-works.php'); ?>
	
	<!-- works -->
	<div class="padding-t-100 background-c-grey4">
		<div class="container margin-b-50">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0 heading font-f-simplifica">Our Works</div>
			</div>
		</div>
		<div class="image-grid js">
		<div class="image-grid__item image-grid__item-sizer"></div>
		<?php
//$config->object_type = 'our-works';
//include("cosmicjs.php");
	//echo "dsa";
	
	
	$objects = $cosmicjs->getObjectType();
	//print_r($objects);
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

	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="margin-b-30 center-text">
				<img src="dist/img/illustration-testimonial.svg">
			</div>
			<div class="margin-b-30 heading font-f-simplifica center-text">Choose a plan that’s right for you</div>
			<div class="center-text">
				<a href="#" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Pricing</a>
			</div>
		</div>
	</div>

<?php //require_once('footer.php'); ?>