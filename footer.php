		<!-- footer -->		
		<div class="footer background-c-teal1">
			<!-- footer__wrap -->
			<div class="footer__wrap">
				<div class="footer__img" style="background: url(dist/img/banner-footer.jpg) no-repeat center / cover"></div>
				<div class="footer__contact">
					<div class="footer__form">
						<div class="heading font-f-simplifica font-c-white margin-b-10">Want to work with us?</div>
						<div class="flex margin-b-20">
							<input type="text" class="footer__form-txt font-s-s" placeholder="Enter email">
							<button class="footer__form-btn-icon">
								<svg class="icon icon--l" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<use class="icon__white" xlink:href="#ic-arrow-right-nb" />
								</svg>
							</button>
						</div>
					</div>
					<div class="footer__address margin-b-20">
	<div class="font-f-sansation font-c-white margin-b-10">Main Office</div>
    <?php
	//$object = $cosmicjs->getObject();
	$contact = $cosmicjs->getgeneric('contact-number');
	$address = $cosmicjs->getgeneric('address');
	$email = $cosmicjs->getgeneric('contact-email');
	//print_r($contact);

	?>
		<div class="font-c-white font-s-l margin-b-20"><?php echo $address->object->content; ?></div>
<div class="margin-b-20"><a href="mailto:hello@simplemedia.co" class="font-c-white"><?php echo $email->object->content; ?></a></div>
<div><a href="tel:2147852420" class="font-c-white"><?php echo $contact->object->content; ?></a></div>
					</div>
					<div class="footer__social margin-b-30">
                     <?php
						$social = $cosmicjs->getgeneric('footer-social');
						
					?>
					<?php echo $social->object->content; ?>
					</div>
					<ul class="footer__menu">
                      <?php
						$menu1 = $cosmicjs->getgeneric('footer-menu');
						$footer_list = $menu1->object->metafields;
						foreach($footer_list as $menu)
						{
							//print_r($item);
						
						?>

						<li class="margin-b-10"><a href="/<?php echo $menu->value; ?>" class="font-c-white footer__menu-link font-s-xs"><?php echo $menu->title; ?></a></li>
                        <?php } ?>
                        </ul>
					<div class="footer__copyright font-c-white font-s-xs">©2016 <a href="http://smstaging.net/simplemedia-new/" class="font-c-white">Simple Media LLC</a></div>
				</div>
			</div>
			<!-- footer__wrap -->
		</div>
		<!-- footer -->	

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
		<script type="text/javascript" src="bower_components/rangeslider-pure/dist/rangeSlider.min.js"></script>
		<script type="text/javascript" src="dist/js/main.js"></script>
	</body>
</html>