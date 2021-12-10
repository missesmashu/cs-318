<?php
namespace models;

class demo extends \funky\model{
	public function markdown_snippet(){
		return '[demo.'.$this->id.']';
	}

	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
			['use_template', 'flag', ['default'=>true]],
			['html', 'text', ['length'=>'long']],
			['css', 'text', ['length'=>'long']],
		]);
	}
}