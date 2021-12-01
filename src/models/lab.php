<?php
namespace models;

class lab extends \funky\model{
	public function path(){
		return '/labs/'.$this->slug->get();
	}

	public static function fromslug($slug){
		return static::query()->where(['slug'=>$slug])->first();
	}

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
