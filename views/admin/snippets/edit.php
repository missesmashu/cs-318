<header>
	<h2><a href="/admin/snippets">Snippets</a> / <?=($snippet->exists()) ? 'Edit' : 'New'?></h2>
	<div>
		<a class="button" href="/admin/snippets/edit/0">New Snippet</a>
		<button class="save" form="edit-form">Save</button>
	</div>
</header>

<form method="post" action="" id="edit-form">
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
