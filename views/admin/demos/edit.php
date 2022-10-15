<header>
	<h2><a href="/admin/demos">Demos</a> / <?=($demo->exists()) ? 'Edit' : 'New'?></h2>
	<div>
		<a class="button" href="/admin/demos/edit/0">New Demo</a>
		<button class="save" form="edit-form">Save</button>
	</div>
</header>

<form method="post" action="" id="edit-form">
	<div class="field"><?=$demo->name->view()?></div>
	<div class="field"><?=$demo->size->view()?></div>
	<div class="field"><?=$demo->html->view('textarea')?></div>
	<div class="field"><?=$demo->css->view('textarea')?></div>

	<?php if($demo->exists()){?>
		<div class="field">
			<label>Markdown Snippet</label>
			<input type="text" readonly value="<?=$demo->markdown_snippet()?>">
		</div>
	<?php }?>
</form>
