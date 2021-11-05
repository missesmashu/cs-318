<?php
namespace models;

class document extends \funky\model{
	public function update($data){
		$this->file->upload();
		parent::update($data);
	}

	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
			['file', 'file', ['dir'=>'uploads/documents/']],
		]);
	}
}
