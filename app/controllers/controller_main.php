<?php

class Controller_main extends Controller{

	function index(){
		session_start();
		if ($_SESSION['loggued_on_user'])
			$this->view->render('view_main.php', $this->view->template_view);
		else{
			$this->view->render('view_auth.php', $this->view->template_view);

		}
	}
}

?>
