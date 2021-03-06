<?php
namespace Core;

class Controller {

	public function view($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

	public function render($viewName, $viewData = array()) {
//		require 'themes/layout'.LAYOUT.'/header.php';
		 require 'themes/layout'.LAYOUT.'/template.php';
		// require 'theme_v1/template/content.php';
//		require 'themes/layout'.LAYOUT.'/footer.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

}