<?php
class Controller {

	public $model;
	public $view;

	function __construct(){
		$this->view = new View();
		session_start();
		$controller_name = $this->getUri();
		if ($controller_name != "auth"){
			if (!array_key_exists('loggued_on_user', $_SESSION)){
				$this->view->render('view_auth.php', $this->view->template_view);
				exit();
			}
		}
	}

	protected function getUri(){
		$controller_name = 'main';
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if (!empty($routes[1])){
			$controller_name = $routes[1];
		}
		return ($controller_name);
	}

}

?>
