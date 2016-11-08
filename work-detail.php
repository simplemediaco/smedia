<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
<?php require_once('banner-parking-day.php'); ?>
	
	<!-- content -->
	<?php
foreach($object as $data)
	{
	?>
	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					<div class="heading font-f-simplifica margin-b-30"><?php echo $data->title; ?></div>
					<div class="font-s-m margin-b-30"><?php echo $data->content; ?></div>
					<div class="font-f-sansation margin-b-30">
						<div class="font-c-teal1">Services</div>
                        	<?php
		foreach($data->metafields as $ser)
				{
					$test = (array)$ser;
						if($test['key']=='services')
					{ ?>
						<div><?php echo $test['value']; ?></div>
				<?php } } ?>
                	</div>
					<a href="" class="button-icon">
						<div class="button-icon__wrap">
							<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-arrow-right" />
							</svg>
							<div class="padding-l-10 font-f-sansation font-c-teal1 font-s-xs">Launch Project</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- content -->

	<!-- image -->

					
	<div class="background-c-grey4 padding-t-100 padding-b-50">
		<div class="container">
			<div class="row">
         <?php 	
		 $branding_Array = '';
		 foreach($data->metafields as $brand)
					{
						$brnd_image = (array)$brand;
						if($brnd_image['key']=='branding_images')	
							{
									foreach($brnd_image['children'] as $brad_set)
										{
											$i=0;
											foreach($brad_set as $dataset)
											{ 
												foreach($dataset as $final_data)
												{
													
												//echo "brand";
												$test1 = (array)$final_data;
											//	print_r($test1);
												if($test1['value'] != '' && $test1['key']=='image')
													{
														$branding_Array[$test1['key']] = $test1['url'];
													}
													else
														{
															$branding_Array[$test1['key']] = $test1['value'];
														}
													
												//print_r($test1);
												
												?>
                                            
												<?php
											 }
										
										  }
										  $clas = '';
										  
										  if($branding_Array['image'])
										  {
											 
											  if($branding_Array['size']=='100%')
											  	{
													$clas='';
												  }
												  else
												  	{
															$clas='col-sm-6';
													  
													  }
										  ?>
                                          
 <div class="col-xs-12 <?php echo $clas; ?> margin-b-40">
<div class="aspect-<?php echo $branding_Array['ratio']; ?>" style="background: url(<?php echo $branding_Array['image']; ?>) no-repeat center / cover"></div>
                                          <?php }
										//  print_r($branding_Array);
										   //exit("2nd level");
										}
								
							}
						
					}
				?>
				</div>
			</div>
		</div>
	</div>
	<!-- image -->
<?php } ?>
	<!-- next project -->
	<div class="project-nav">
		<div class="project-nav__label">
			<div class="font-s-xxxl font-f-simplifica font-c-white">Agency Blazr</div>
		</div>
		<div class="project-nav__link">
			<a href="http://smstaging.net/simplemedia-new/works-agency-blazr.php" class="button-icon">
				<div class="button-icon__wrap">
					<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<use class="icon__white" xlink:href="#ic-arrow-right" />
					</svg>
					<div class="padding-l-10 font-f-sansation font-c-white">Next Project</div>
				</div>
			</a>
		</div>
	</div>
	
	<!-- next project -->

<?php require_once('footer.php'); ?>