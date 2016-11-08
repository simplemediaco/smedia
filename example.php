<?php

/* !!!! CONFIGURE !!!!
==================================== */
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
$config->object_slug = 'banner-video';
$config->object_type = 'our-works';
include("cosmicjs.php");
$header_image ='';
$services = '';
$aspect_ratio ='';
$objects = $cosmicjs->getObjectType();
			//echo "here";
			//print_r($objects);
			
	foreach($objects as $data1)
	{
		//echo $data1->slug;
		
		foreach($data1 as $meta1)
			{
				
			}
	}
	
	//print_r($final_array);
/* Get Objects
================================= */

//$objects = $cosmicjs->getObjects();

//var_dump($object);

?>
