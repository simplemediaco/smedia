<?php require_once('header.php'); ?>
<?php require_once('navigation-light.php'); ?>

	<!-- branding and creative -->
	<div class="padding-t-100 padding-b-100 background-c-grey4">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<div class="row margin-b-30">
						<div class="col-xs-12 col-sm-9 margin-b-20">
							<div class="heading font-f-simplifica margin-b-10">Congratulation! Thank you for ordering the product.</div>
							<div class="font-f-sansation font-c-teal1">Please take a moment to take answer the survey to better understand your brand</div>
						</div>
						<div class="col-xs-12 col-sm-3 padding-t-10 margin-b-20"><img class="order-question-svg" src="dist/img/illustration-testimonial.svg"></div>
					</div>
					<div class="margin-b-20">
						<div class="font-s-xs margin-b-10">Is new project or rebrand</div>
						<div class="select">
							<select>
								<option value="Rebrand">rebrand</option>
								<option value="New Project" selected>new project</option>
								<option value="Another Item 1">Another Item 1</option>
								<option value="Another Item 2">Please take a moment to take answer the survey to better understand your brand</option>
							</select>
							<svg class="select__icon" width="16" height="16" viewBox="0 0 24 24">
								<path style="stroke:none" d="M.013.465h23.04v23.04H.013z"/>
								<path d="M19.533 7.985l-8 8-8-8"/>
							</svg>
							<div class="select__default"></div>
							<div class="select__wrap"></div>
						</div>
					</div>
					<div class="margin-b-20">
						<div class="font-s-xs margin-b-10">File Attachment</div>
						<div class="textfield-icon">
							<div class="textfield-icon__item">
								<svg class="icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<use class="icon__teal1" xlink:href="#ic-attach" />
								</svg>
							</div>
							<input class="textfield padding-r-50 font-s-s" type="text" name="fileattachment" placeholder="http://">
						</div>
					</div>
					<div class="margin-b-20">
						<div class="font-s-xs margin-b-10">What is the exact wording you would like to appear in the logo</div>
						<input class="textfield font-s-s" type="text" name="logoname" placeholder="Type logo name">
					</div>
					<div class="margin-b-20">
						<div class="font-s-xs margin-b-10">What is the nature of your business?</div>
						<div class="select">
							<select>
								<option value="0">Sample nature 1</option>
								<option value="1" selected>Sample nature 2</option>
								<option value="2">Sample nature 3</option>
							</select>
							<svg class="select__icon" width="16" height="16" viewBox="0 0 24 24">
								<path style="stroke:none" d="M.013.465h23.04v23.04H.013z"/>
								<path d="M19.533 7.985l-8 8-8-8"/>
							</svg>
							<div class="select__default"></div>
							<div class="select__wrap"></div>
						</div>
					</div>
					<div class="margin-b-20">
						<div class="font-s-xs margin-b-10">Who is your target market/demographic?</div>
						<div class="select">
							<select>
								<option value="1">Target market 1</option>
								<option value="2">Target market 2</option>
								<option value="3">Target market 3</option>
								<option value="4">Target market 4</option>
								<option value="5">Target market 5</option>
								<option value="6">Target market 6</option>
								<option value="7" selected>Target market 7</option>
							</select>
							<svg class="select__icon" width="16" height="16" viewBox="0 0 24 24">
								<path style="stroke:none" d="M.013.465h23.04v23.04H.013z"/>
								<path d="M19.533 7.985l-8 8-8-8"/>
							</svg>
							<div class="select__default"></div>
							<div class="select__wrap"></div>
						</div>
					</div>
					<div class="margin-b-50">
						<div class="font-s-xs margin-b-10">Select 3 descriptive keywords that best represent your brand?</div>
						<div class="select">
							<select>
								<option value="1">Creative</option>
								<option value="2" selected>Minimal</option>
								<option value="4">Elegant</option>
							</select>
							<svg class="select__icon" width="16" height="16" viewBox="0 0 24 24">
								<path style="stroke:none" d="M.013.465h23.04v23.04H.013z"/>
								<path d="M19.533 7.985l-8 8-8-8"/>
							</svg>
							<div class="select__default"></div>
							<div class="select__wrap"></div>
						</div>
					</div>
					<div class="margin-t-50 order-next">
						<a href="" class="button button--b-teal1 font-f-sansation font-c-teal1">Submit</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- marketing -->

<?php require_once('footer.php'); ?>