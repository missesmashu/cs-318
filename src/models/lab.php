<?php
namespace models;

class lab extends \funky\model{
	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
			['slug', 'slug', ['slugify'=>'name']],
			['goal', 'markdown'],
			['learn', 'markdown'],
			['practice', 'markdown'],
		]);
	}
}
