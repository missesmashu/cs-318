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

	private function show($lab_id){
		$lab = lab::fromid($lab_id);
		return f()->view->load('labs/show', [
			'lab'=>$lab,
		]);
	}
}