<?php
namespace services;

class markdown extends \funky\services\markdown{
	public function __construct(){
		parent::__construct();
		$this->InlineTypes['['][] = 'Snippet';
		$this->InlineTypes['['][] = 'Document';
		$this->InlineTypes['['][] = 'Checkbox';
	}

	protected function inlineSnippet($excerpt)
	{
		if(preg_match('/\[code\.([0-9]+)\]/', $excerpt['text'], $matches)){
			$snippet = \models\snippet::fromid($matches[1]);
			if($snippet->exists()){
				$ret = [
					'extent'=>strlen($matches[0]),
					'markup'=>f()->view->load('components/snippet', [
						'snippet'=>$snippet,
					]),
				];

				return $ret;
			}
		}
	}

	protected function inlineDocument($excerpt)
	{
		if(preg_match('/\[doc\.([0-9]+)\]/', $excerpt['text'], $matches)){
			$document = \models\document::fromid($matches[1]);
			if($document->exists()){
				$ret = [
					'extent'=>strlen($matches[0]),
					'markup'=>f()->view->load('components/document', [
						'document'=>$document,
					]),
				];

				return $ret;
			}
		}
	}

	protected function inlineCheckbox($excerpt)
	{
		if(preg_match('/\[checkbox\]/', $excerpt['text'], $matches)){
			$ret = [
				'extent'=>strlen($matches[0]),
				'markup'=>f()->view->load('components/checkbox'),
			];

			return $ret;
		}
	}
}