<header>
	<h2>Editing Document</h2>
	<div>
		<a class="button" href="/admin/documents">Back to documents</a>
		<a class="button" href="<?=f()->url->get('admin/documents/edit/0')?>">New Document</a>
		<input type="submit" value="Save" class="green" form="edit-form">
	</div>
</header>

<form method="post" action="<?=f()->url->current()?>" enctype="multipart/form-data" id="edit-form">
	<div class="field"><?=$document->name->view()?></div>
	<div class="field"><?=$document->file->view()?></div>

	<?php if($document->exists()){?>
		<div class="field">
			<label>Markdown Snippet</label>
			<input type="text" readonly value="[doc.<?=$document->id?>]">
		</div>
	<?php }?>
</form>
