<?php
//include our models
//include_once 'models/ps_models.php';

/*try {
	
	$params = $_REQUEST;
	
	$params = (array) $params;
	
	$controller = $params['controller'];
	
	$action = $params['action'].'Action';
	
	//check if the controller exists. if not, throw an exception
	if( file_exists("controllers/{$controller}.php") ) {
		include_once "controllers/{$controller}.php";
	} else {
	throw new Exception('Controller is invalid.');
	}
	
	$controller = new $controller($params);

	if( method_exists($controller, $action) === false ) {
		throw new Exception('Action is invalid.');
	}
	$result['data'] = $controller->$action();
	$result['success'] = true;
	
} catch( Exception $e ) {
	//catch any exceptions and report the problem
	$result = array();
	$result['success'] = false;
	$result['errormsg'] = $e->getMessage();
}*/

echo 'this is an API';
//$params = $_REQUEST;
//$params = (array) $params;
//echo json_encode($params);
//exit();
?>