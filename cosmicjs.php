<?php
include("curl.php");
$curl = new Curl;
class CosmicJS {
  function __construct(){
    global $curl;
    global $config;
    $this->curl = $curl;
    $this->config = $config;
    $this->config->bucket_slug = $config->bucket_slug;
    $this->config->object_slug = $config->object_slug;
    $this->config->read_key = $config->read_key;
    $this->config->write_key = $config->write_key;
    $this->config->url = "https://api.cosmicjs.com/v1/" . $this->config->bucket_slug;
	$config->objurl    = "https://api.cosmicjs.com/v1/". $this->config->bucket_slug . "/object-type/". $this->config->object_type. "?read_key=" . $this->config->read_key;
	
	$config->serviceUrl    = "https://api.cosmicjs.com/v1/". $this->config->bucket_slug . "/object-type/". $this->config->service_type. "?read_key=" . $this->config->read_key;
	
    $this->config->objects_url = $this->config->url . "/objects?read_key=" . $this->config->read_key;
    $this->config->object_url = $this->config->url . "/object/" . $this->config->object_slug . "?read_key=" . $this->config->read_key;
	 $this->config->banner_url = $this->config->url . "/object/" . $this->config->banner_slug . "?read_key=" . $this->config->read_key;
    $this->config->media_url = $this->config->url . "/media?read_key=" . $this->config->read_key;
    $this->config->add_object_url = $this->config->url . "/add-object?write_key=" . $this->config->write_key;
    $this->config->edit_object_url = $this->config->url . "/edit-object?write_key=" . $this->config->write_key;
    $this->config->delete_object_url = $this->config->url . "/delete-object?write_key=" . $this->config->write_key;
  }
  // Get all objects
  public function getObjects(){
	//  echo $this->config->objects_url;

    $data = json_decode($this->curl->get($this->config->objects_url));
    return $data;
  }
  
  
   public function getObjectType(){
	  // print_r()
	
    $data = json_decode($this->curl->get($this->config->objurl));

	return $data;
	
  }
    public function getServices(){
	  // print_r()
	
    $data = json_decode($this->curl->get($this->config->serviceUrl));

	return $data;
	
  }
   public function getBanner(){
    $data = json_decode($this->curl->get($this->config->banner_url));
    return $data;
  }
  // Get all object
  public function getObject(){
    $data = json_decode($this->curl->get($this->config->object_url));
    return $data;
  }
  // Get media
  public function getMedia(){
    $data = json_decode($this->curl->get($this->config->media_url));
    return $data->media;
  }
  // Add object
  public function addObject($params){
    $data = $this->curl->post($this->config->add_object_url, $params);
    return $data;
  }
  // Edit object
  public function editObject($params){
    $data = $this->curl->put($this->config->edit_object_url, $params);
    return $data;
  }
  // Delete object
  public function deleteObject($params){
    $data = $this->curl->delete($this->config->delete_object_url, $params);
    return $data;
  }
}
$cosmicjs = new CosmicJS;