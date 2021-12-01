<?php
namespace controllers;
use models\lab;

class labs{
	public function __call($func, $args){
		return $this->show($func);
	}

	public function index(){
		$labs = lab::query()->order('name');
		return f()->view->load('labs/index', [
			'labs'=>$labs,
		]);
	}

	private function show($slug){
		$lab = lab::fromslug($slug);
		if($lab === false) return false;

		return f()->view->load('labs/show', [
			'lab'=>$lab,
		]);
	}
}