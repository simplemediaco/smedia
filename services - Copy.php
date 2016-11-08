<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
<?php require_once('banner-services.php'); ?>
	<?php 
			$services = $cosmicjs->getServices();
			print_r($services);
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
											//	print_r($data_final);
											if($data_final->value != '' && $data_final->key=='strategy_title')
													{
						
						
						$ser_array .= $data_final->value.",";
						
				?>
                	<?php
														
													}
										
						?>
						
						<?php   } }  } } } ?>
	<div class="full-width-responsive" style="background: url(dist/img/services_01.jpg) no-repeat center / cover"></div>
	
	<!-- branding and creative -->
	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<div class="margin-b-50 margin-t-20 center-block">
						<img class="service__img" src="dist/img/illustration-branding.svg" alt="Branding">
						<div class="margin-t-50 center-text">
							<a href="http://smstaging.net/simplemedia-new/works.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Works</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="heading font-f-simplifica margin-b-50">Branding and Creative</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Strategy</div>
						<div class="font-c-grey3 font-s-xs">LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before.</div>
					</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Brand Identity</div>
						<div class="font-c-grey3 font-s-xs">Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy.</div>
					</div>
					<div class="margin-b-20">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Print and Digital Collateral</div>
						<div class="font-c-grey3 font-s-xs">Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! Downloading music to your Ipod has more than one pitfall associated with it, and this article will tell you the best way to download free song for Ipod.</div>
					</div>
					<!-- icons -->
					<div class="row">
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-business-card" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Business Card</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-stationary" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Stationary</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-social-media" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Social Media Profile</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-gift-bag" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Gift Bag</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-poster" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Poster</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-brochure" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Brochure</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-business-card" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Business Card</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-stationary" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Stationary</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-social-media" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Social Media Profile</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-gift-bag" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Gift Bag</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-poster" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Poster</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-brochure" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Brochure</div>
						</div>
					</div>
					<!-- icons -->
				</div>
			</div>
		</div>
	</div>
	<!-- branding and creative -->
<?php  } } ?>
	<div class="full-width-responsive" style="background: url(dist/img/services_02.jpg) no-repeat center / cover"></div>

	<!-- web design and development -->
	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 margin-t-20">
					<div class="margin-b-50 center-block">
						<img class="service__img" src="dist/img/illustration-web.svg" alt="Branding">
						<div class="margin-t-50 center-text">
							<a href="http://smstaging.net/simplemedia-new/works.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Works</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="heading font-f-simplifica margin-b-50">Web Design and Development</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">UIX Design</div>
						<div class="font-c-grey3 font-s-xs">LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before.</div>
					</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Frontend Development</div>
						<div class="font-c-grey3 font-s-xs">Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy.</div>
					</div>
					<div class="margin-b-20">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Backend Development</div>
						<div class="font-c-grey3 font-s-xs">Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! Downloading music to your Ipod has more than one pitfall associated with it, and this article will tell you the best way to download free song for Ipod.</div>
					</div>
					<!-- icons -->
					<div class="row">
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-photoshop" />
							</svg>
							<div class="font-f-segeo font-s-xxs">PSD</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-sketch" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Sketch</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-html5" />
							</svg>
							<div class="font-f-segeo font-s-xxs">HTML5</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-css3" />
							</svg>
							<div class="font-f-segeo font-s-xxs">CSS3</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-js" />
							</svg>
							<div class="font-f-segeo font-s-xxs">JavaScript</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-wordpress" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Wordpress</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-cosmicjs" />
							</svg>
							<div class="font-f-segeo font-s-xxs">CosmicJS</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-shopify" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Shopify</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-php" />
							</svg>
							<div class="font-f-segeo font-s-xxs">CorePHP</div>
						</div>
					</div>
					<!-- icons -->
				</div>
			</div>
		</div>
	</div>
	<!-- web design and development -->

	<div class="full-width-responsive" style="background: url(dist/img/services_03.jpg) no-repeat center / cover"></div>

	<!-- online marketing -->
	<div class="padding-t-100 padding-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 margin-t-20">
					<div class="margin-b-50 center-block">
						<img class="service__img" src="dist/img/illustration-marketing.svg" alt="Branding">
						<div class="margin-t-50 center-text">
							<a href="http://smstaging.net/simplemedia-new/works.php" class="button button--b-teal1 button--c-teal1 font-f-sansation">View Works</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="heading font-f-simplifica margin-b-50">Online Marketing</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Google Adwords</div>
						<div class="font-c-grey3 font-s-xs">LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before.</div>
					</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Bing Ads</div>
						<div class="font-c-grey3 font-s-xs">Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy.</div>
					</div>
					<div class="margin-b-50">
						<div class="font-f-sansation font-c-teal1 margin-b-20">Facebook Ads</div>
						<div class="font-c-grey3 font-s-xs">Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy.</div>
					</div>
					<div class="margin-b-20">
						<div class="font-f-sansation font-c-teal1 margin-b-20">SEO</div>
						<div class="font-c-grey3 font-s-xs">Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy.</div>
					</div>
					<!-- icons -->
					<div class="row">
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-google-partner" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Google Partner</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-bing" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Bing Accredited</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-fb-ads" />
							</svg>
							<div class="font-f-segeo font-s-xxs">Facebook Ads</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-hubspot" />
							</svg>
							<div class="font-f-segeo font-s-xxs">HubSpot Inbound Partner</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-hubspot" />
							</svg>
							<div class="font-f-segeo font-s-xxs">HubSpot Partner</div>
						</div>
						<div class="center-text col-xs-4 col-md-3 margin-t-30">
							<svg class="icon icon--xxxl" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
								<use class="icon__teal1" xlink:href="#ic-hubspot" />
							</svg>
							<div class="font-f-segeo font-s-xxs">HubSpot Partner Certified</div>
						</div>
					</div>
					<!-- icons -->
				</div>
			</div>
		</div>
	</div>
	<!-- online marketing -->

<?php require_once('footer.php'); ?>