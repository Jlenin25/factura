<?php

require_once './models/ViewModel.php';

class ViewController extends ViewModel {
	public function getTemplateController() {
		return require_once 'views/index.php';
	}
	public function getViewController() {
		if(isset($_GET['views'])) {
			$rute = explode('/',$_GET['views']);
			$answer = ViewModel::getViewModel($rute[0]);
		} else {
			$answer = 'login';
		}
		return $answer;
	}
}