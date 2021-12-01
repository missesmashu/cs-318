<header>
	<h2>Editing Snippet</h2>
	<div>
		<a class="button" href="/admin/snippets">Back to snippets</a>
		<a class="button" href="<?=f()->url->get('admin/snippets/edit/0')?>">New Snippet</a>
		<input type="submit" value="Save" class="green" form="edit-form">
	</div>
</header>

<form method="post" action="<?=f()->url->current()?>" id="edit-form">
	<div class="field"><?=$snippet->name->view()?></div>
	<div class="field"><?=$snippet->language->view()?></div>
	<div class="field"><?=$snippet->code->view('textarea')?></div>

	<?php if($snippet->exists()){?>
		<div class="field">
			<label>Markdown Snippet</label>
			<input type="text" readonly value="[code.<?=$snippet->id?>]">
		</div>
	<?php }?>
</form>
