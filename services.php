
<?php require_once('banner-services.php'); ?>
	<?php 
			$services = $cosmicjs->getServices();
			//print_r($services);
	?>
       <?php 
				$ser_array = '';
				$feat_img = '';
				$price = '';
				$img = '';
				$services = $cosmicjs->getServices();
				//print_r($services);
				foreach($services as $coreservice)
				{
					foreach($coreservice as $service)
					{
							foreach($service->metafields as $data11)
							{
								$data11 = array($data11);
							//	print_r($data11);
							//	echo $data11[0]->key;
								if($data11[0]->key=='artwork_svg')
									{
										
										$feat_img =$data11[0]->url;
										
										//die('sssss');
									}
										if($data11[0]->key=='starting_price')
									{
										
								$price = $data11[0]->value;
										
										//die('sssss');
									}
										if($data11[0]->key=='feature_image')
									{
										
										$img = $data11[0]->url;
										
										//die('sssss');
									}
									
							}
						//	die("sa");
						?>
	<div class="full-width-responsive" style="background: url(<?php echo $img; ?>) no-repeat center / cover"></div>
	
	<!-- branding and creative -->
	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<div class="margin-b-50 margin-t-20 center-block">
						<img class="service__img" src="<?php echo $feat_img; ?>" alt="Branding">
						<div class="margin-t-50 center-text">
							<a href="http://smstaging.net/simplemedia-new/works.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Works</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="heading font-f-simplifica margin-b-50"><?php echo $service->title; ?></div>
				<?php
				foreach($service->metafields as $stretegy)
							{
								
								$stretegy = array($stretegy);
								
						//print_r($stretegy);
							
									
					//	$stretegy = (array)$stretegy;
							if($stretegy[0]->key=='strategy_step')
									{
										foreach($stretegy[0]->children as $stretegy_set)
										{
											foreach($stretegy_set as $stretegy_cont)
											{
												foreach($stretegy_cont as $data_final)
												{
				?>
                	<div class="margin-b-50">
                    <?php
					if($data_final->value != '' && $data_final->key=='strategy_title')
													{
					?>
						<div class="font-f-sansation font-c-teal1 margin-b-20"><?php echo $data_final->value; ?></div>
                        <?php 
													}
						?>
                        <?php
					if($data_final->value != '' && $data_final->key=='strategy_content')
													{
					?>
						<div class="font-c-grey3 font-s-xs"><?php echo $data_final->value; ?></div>
                        <?php } ?>
					</div>
                    	<?php   } }  } } 
						?>
                        	<div class="row">
                        <?php 
						
						if ($stretegy[0]->key=='technologies')
  {
	 $value=$stretegy[0]->children[0]->children[0]->value;
	
 //print_r($svg_array);
 foreach($value as $val)
 {
	$val = trim($val);
						
						 ?>
					
					
					<!-- icons -->
                    
				
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-<?php echo trim($svg_array[$val]); ?>" />
							</svg>
							<div class="font-f-segeo font-s-xxs"><?php echo $val.$svg_array[$val]; ?></div>
						</div>
                        <?php } ?>
				
                        <?php } ?>
					</div>
                    <?php } ?>
					<!-- icons -->
				</div>
			</div>
		</div>
	</div>
	<!-- branding and creative -->
<?php  } } ?>
	

	

	<!-- online marketing -->
	
	<!-- online marketing -->

<?php //require_once('footer.php'); ?>