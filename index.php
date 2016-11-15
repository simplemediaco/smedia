<?php require_once('header.php'); ?>
<?php //require_once('navigation.php'); 
$inc = '';
?>

<?php
if(isset($_REQUEST['slug']))
{
	$config->object_slug = $_REQUEST['slug'];
}

else
{
	$string = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	
	$config->object_slug =array_pop(explode('/', $string));
	
	
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
$config->object_menu = 'menu';



include("cosmicjs.php");
$object = $cosmicjs->getObject();

?>

<?php 
require('navigation.php'); 
if($inc=='main.php')
{
require_once('banner.php'); } ?>

<?php 
include($inc);
?>

<?php require_once('footer.php'); ?>