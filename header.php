
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Simple Media LLC</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
		<link rel="stylesheet" type="text/css" href="bower_components/rangeslider-pure/dist/rangeSlider.min.css">
		<link rel="stylesheet" href="dist/css/main.css">
	</head>
	<body>
		<?php require_once('svg-sprites.php'); ?>
		<?php

$config = new stdClass();
$config->bucket_slug = "simplemedia"; // bucket slug
$config->read_key = "k153FdH86TaSEnI1J5nUnjNVjgVLdse0Uuu7PpJQg9s6tyoQeG"; // leave empty if not required
$config->write_key = "YKcwYQVqnt2oWH1R78KupQ5Jb8ziIlSRR8MjRrv6le7h6hxgxI"; // leave empty if not required

$config->url = "https://api.cosmicjs.com/v1/" . $config->bucket_slug;
$config->objects_url = $config->url . "/objects";
$config->media_url = $config->url . "/media";
$config->add_object_url = $config->url . "/add-object";
$config->edit_object_url = $config->url . "/edit-object";
$config->delete_object_url = $config->url . "/delete-object";


$svg_array = array("Business Card"=>"business-card","Social Media Profile"=>"social-media","Gift Bag"=>"gift-bag","Poster"=>"ic-poster","Brochure"=>"brochure","PSD"=>"photoshop","Sketch"=>"sketch","HTML5"=>"html5","CSS3"=>"css3","JavaScript"=>"js","Wordpress"=>"wordpress","CosmicJS"=>"cosmicjs","Shopify"=>"shopify","CorePHP"=>"php","Google Partner"=>"google-partner","Bing Accredited"=>"bing","Facebook Ads"=>"fb-ads","HubSpot Inbound Partner"=>"hubspot","HubSpot Partner"=>"hubspot","HubSpot Partner Certified"=>"hubspot","Stationary"=>"stationary" );
?>