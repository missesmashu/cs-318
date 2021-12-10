<?php
namespace services;

class markdown extends \funky\services\markdown{
	public function __construct(){
		parent::__construct();
		$this->InlineTypes['['][] = 'Snippet';
		$this->InlineTypes['['][] = 'Demo';
		$this->InlineTypes['['][] = 'Document';
		$this->InlineTypes['['][] = 'Checkbox';
		$this->InlineTypes['['][] = 'Hint';
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

	protected function inlineDemo($excerpt)
	{
		if(preg_match('/\[demo\.([0-9]+)\]/', $excerpt['text'], $matches)){
			$demo = \models\demo::fromid($matches[1]);
			if($demo->exists()){
				$ret = [
					'extent'=>strlen($matches[0]),
					'markup'=>f()->view->load('components/demo', [
						'demo'=>$demo,
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

	protected function inlineHint($excerpt)
	{
		if(preg_match('/\[hint\]/', $excerpt['text'], $matches)){
			$ret = [
				'extent'=>strlen($matches[0]),
				'markup'=>f()->view->load('components/hint'),
			];

			return $ret;
		}
	}
}