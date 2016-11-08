<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); 
$inc = '';
?>

<?php
if(isset($_REQUEST['slug']))
{
	$config->object_slug = $_REQUEST['slug'];
}

else
{
	$slug = $_SERVER['REQUEST_URI'];
	$slug = explode("/",$slug);
	$config->object_slug = $slug[1];
	
if($config->object_slug=='')
	{
		$inc = 'main.php';
		
	}
	else if($config->object_slug=='services')
		{
				$inc = 'services.php';
		}
	else if($config->object_slug=='works')
		{
			$inc = 'works.php';
		}
		else{
			$inc = 'page.php';
			}
		
}
$config->banner_slug = 'banner-video';
//$config->object_slug = 'banner-video';
$config->service_type = 'services';
$config->object_type = 'our-works';
include("cosmicjs.php");
$object = $cosmicjs->getObject();
?>

<?php 
if($inc=='main.php')
{
require_once('banner.php'); } ?>

<?php 
include($inc);
?>

<?php require_once('footer.php'); ?>