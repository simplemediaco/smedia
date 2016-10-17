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

include("cosmicjs.php");

/* Get Objects
================================= */

//$objects = $cosmicjs->getObjects();

//var_dump($object);

?>
