<?php
namespace models;

class snippet extends \funky\model{
	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
			['language', 'enum', ['values'=>['html', 'css', 'js']]],
			['code', 'text', ['length'=>'long']],
		]);
	}
}
