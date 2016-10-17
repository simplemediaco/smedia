
<?php
//$object = $cosmicjs->getObject();
//print_r($object);

?>
<!-- banner -->
<div class="banner background-c-teal1">
	<div class="banner__video">
		<video muted="muted" autoplay="" loop="" preload="auto">
		<?php 
	foreach($object as $data)
	{
		foreach($data->metafields as $meta)
			{
				
			?> 
			
			<source src="<?php echo $meta->url; ?>" type="video/mp4">
			
			<?php	
			
			}
		
	}
		?>
			
		</video>
	</div>
	<!-- banner__wrap -->
	<div class="banner__wrap container">
		<div class="banner__wrap-nav">
			<div class="slide-nav js">
				<div class="banner__item">
					<div class="banner__label font-f-sansation font-c-white">Web Design and Development</div>
					<div class="banner__title font-f-simplifica font-c-white">Cibo Divino Marketplace</div>
				</div>
				<div class="banner__item">
					<div class="banner__label font-f-sansation font-c-white">Branding and Creative</div>
					<div class="banner__title font-f-simplifica font-c-white">Simple Media LLC</div>
				</div>
				<div class="banner__item">
					<div class="banner__label font-f-sansation font-c-white">Online Marketing</div>
					<div class="banner__title font-f-simplifica font-c-white">Optimal Blue</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner__wrap -->
	<!-- banner__scroll -->
	<div class="banner__scroll">
		<svg class="icon icon--l" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
			<use class="icon__white" xlink:href="#ic-scroll" />
		</svg>
	</div>
	<!-- banner__scroll -->
</div>
<!-- banner -->