<?php
$object = $cosmicjs->getBanner();
//print_r($object);

?>
	<!-- about -->
	<div class="background-c-white padding-t-100 padding-b-100">
		<div class="container">
			<div class="margin-b-50 center-text">
				<img src="dist/img/logo-simplemedia-outlined.svg">
			</div>
            <?php
		foreach($object as $data)
	{
	
			?>
			<div class="heading font-f-simplifica margin-b-30"><?php 
			echo $data->title;
			?></div>
			<div class="font-s-l">
<?php 
echo $data->content;
?>
			</div>
            <?php } ?>
		</div>
	</div>
	<!-- about -->

	<!-- team -->
	<div class="background-c-grey4 padding-t-100 padding-b-100">
		<div class="container">
			<div class="heading font-f-simplifica">Team</div>
			<div class="row">
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<img class="margin-b-30" src="dist/img/nick_bonanno.jpg">
					<div class="font-f-sansation">
						<div>Nick Bonanno</div>
						<div class="font-c-teal1 font-s-xs">Founder - CEO</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<img class="margin-b-30" src="dist/img/amy_bonanno.jpg">
					<div class="font-f-sansation">
						<div>Amy Bonanno</div>
						<div class="font-c-teal1 font-s-xs">Co-Founder - Director of Communication</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<img class="margin-b-30" src="dist/img/tony_romo.jpg">
					<div class="font-f-sansation">
						<div>Tony Romo</div>
						<div class="font-c-teal1 font-s-xs">Director of Digital Strategy</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<img class="margin-b-30" src="dist/img/robort_ewing.jpg">
					<div class="font-f-sansation">
						<div>Robert Ewing</div>
						<div class="font-c-teal1 font-s-xs">Storyteller, Architect, Digital Innovation</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<div class="margin-b-30 background-c-grey3 aspect-ratio-1-1"></div>
					<div class="font-f-sansation">
						<div>Arnulfo "Pon" Quimada</div>
						<div class="font-c-teal1 font-s-xs">Creative Director</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<div class="margin-b-30 background-c-grey3 aspect-ratio-1-1"></div>
					<div class="font-f-sansation">
						<div>June Leoman Lapera</div>
						<div class="font-c-teal1 font-s-xs">Lead Front End Developer</div>
					</div>
				</div>
				<div class="margin-t-50 col-xs-12 col-sm-4 col-md-3">
					<div class="margin-b-30 background-c-grey3 aspect-ratio-1-1"></div>
					<div class="font-f-sansation">
						<div>Daniela Fracassi</div>
						<div class="font-c-teal1 font-s-xs">Lead Creative</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- team -->

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