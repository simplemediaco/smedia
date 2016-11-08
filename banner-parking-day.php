<?php

//print_r($object);

?>
<?php
foreach($object as $data)
	{
		 
				//print_r($data);
?>

<!-- banner -->
<div class="banner background-c-teal1">
	<!-- banner__wrap -->
	<div class="banner__wrap container">
		<div class="banner__wrap-nav works">
			<div class="banner__item">
				<div class="banner__title font-f-simplifica font-c-white"><?php echo $data->title; ?></div>
			</div>
		</div>
	</div>
	<!-- banner__wrap -->
   
				
				
				
		<?php
		foreach($data->metafields as $img_head)
				{
					$test = (array)$img_head;
						if($test['key']=='header_image')
					{
						//echo $test['url'];
					//print_r($test);
					?>
                    	<div class="banner__bg" style="background: url(<?php echo $test['url']; ?>) no-repeat center / cover"></div>
                    <?php 
					$header_image = $test['url'];
					}
		?>		
				

	<?php } ?>
    <!-- banner__scroll -->
	<div class="banner__scroll">
		<svg class="icon icon--l" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
			<use class="icon__white" xlink:href="#ic-scroll" />
		</svg>
	</div>
	<!-- banner__scroll -->
</div>
<!-- banner -->
<?php 
			 } ?>