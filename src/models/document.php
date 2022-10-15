<?php
namespace models;

class document extends \funky\model{
	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
			['file', 'file'],
		]);
	}
}
