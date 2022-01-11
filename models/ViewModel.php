<?php

class ViewModel {
	protected static function getViewModel($views) {
		$listWhite = ['home','client-list'];
		if(in_array($views,$listWhite)) {
			if(is_file('views/container/'.$views.'.php')) {
				$container = 'views/container/'.$views.'.php';
			} else {
				$container = 'error';
			}
		} else if($views=='login' || $views=='index') {
			$container = 'login';
		} else {
			$container = 'error';
		}
		return $container;
	}
}