<?php

    //Variables 
	//echo "AutoLoader hit";
    if($_SERVER['SERVER_NAME']== "gbfic.org") { $corUrl = "ap/";}else{  $corUrl = "";}
	require_once($corUrl.'api/db.php');
    require_once($corUrl.'api/authent.php');
    require_once($corUrl.'api/states.php');
	$location;
    //$arguments = array('cons_key' => $_POST['cons_key'], 'cons_sec' => $_POST['cons_sec'],'vimeo_name'=>$_POST['vimeo_name'],'vimeo_url'=>$_POST['vimeo_url']); 
  function handleRawRequest($_SERVER, $_GET) {

		$url = getFullUrl($_SERVER);
		$method = $_SERVER['REQUEST_METHOD'];
		switch ($method) {
		  case 'GET':
			$arguments = $_GET;
			break;
		  case 'HEAD':
			$arguments;
			break;
		  case 'POST':
		    $arguments = array('cons_key' => $_POST['cons_key'], 'cons_sec' => $_POST['cons_sec'],'vimeo_name'=>$_POST['vimeo_name'],'vimeo_url'=>$_POST['vimeo_url']); 
			break;
		  case 'PUT':
		  case 'DELETE':
    }
	$accept = $_SERVER['HTTP_ACCEPT'];
   $handleReturn = handleRequest($url, $method, $arguments, $accept);
   return $handleReturn;
  }

  function getFullUrl($_SERVER) {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    global $location ;
	$location = $_SERVER['REQUEST_URI'];
    if ($_SERVER['QUERY_STRING']) {
      $location = substr($location, 0, strrpos($location, $_SERVER['QUERY_STRING']) - 1);
    }
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$location;
  }
   
  function handleRequest($url, $method, $arguments, $accept) {
    switch($method) {
      case 'GET':   
		$switchReturn = performGet($url, $arguments, $accept);
		return $switchReturn;
        break;
      case 'HEAD':
       performHead($url, $arguments, $accept);
        break;
      case 'POST':
		performPost($url, $arguments, $accept);
        break;
      case 'PUT':
         performPut($url, $arguments, $accept);
        break;
      case 'DELETE':
        performDelete($url, $arguments, $accept);
        break;
      default:
        /* 501 (Not Implemented) for any unknown methods */
        header('Allow: ' . supportedMethods, true, 501);
    }
  }
  
  function methodNotAllowedResponse() {
    /* 405 (Method Not Allowed) */
    die( "<h1>Access Forbidden: You are Not Authorized to Access<br /> Please Exit this Site Immediately, Remember!!</h1>");
	
	
	//header('Allow: ' . supportedMethods, true, 405);
  }

  function performGet($url, $arguments, $accept) {
    //$this->methodNotAllowedResponse();
	global $location;
	$audio = audio($location);
	return $audio;
	echo "\n<!--****End Web Services*******--> \n";
  }

  function performHead($url, $arguments, $accept) {
    methodNotAllowedResponse();
  }

  function performPost($url, $arguments, $accept) {
    global $location;
	authent($arguments['cons_key'], $arguments['cons_sec'] );
    upload($arguments['vimeo_url'],$arguments['vimeo_name'],$location);
	echo "\n****End Web Services******* \n";
	//methodNotAllowedResponse();
  }

  function performPut($url, $arguments, $accept) {
    methodNotAllowedResponse();
  }

  function performDelete($url, $arguments, $accept) {
	global $location;
	//authent($arguments['cons_key'], $arguments['cons_sec']);
	$maint = maintenance($location);
	return $maint;//methodNotAllowedResponse();
}
?>
