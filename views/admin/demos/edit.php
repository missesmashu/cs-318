<header>
	<h2>Editing Demo</h2>
	<div>
		<a class="button" href="/admin/demos">Back to demos</a>
		<a class="button" href="<?=f()->url->get('admin/demos/edit/0')?>">New Demo</a>
		<input type="submit" value="Save" class="green" form="edit-form">
	</div>
</header>

<form method="post" action="<?=f()->url->current()?>" id="edit-form">
	<div class="field"><?=$demo->name->view()?></div>
	<div class="field"><?=$demo->use_template->view()?></div>
	<div class="field"><?=$demo->html->view('textarea')?></div>
	<div class="field"><?=$demo->css->view('textarea')?></div>

	<?php if($demo->exists()){?>
		<div class="field">
			<label>Markdown Snippet</label>
			<input type="text" readonly value="<?=$demo->markdown_snippet()?>">
		</div>
	<?php }?>
</form>
