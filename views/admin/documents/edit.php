<header>
	<h2><a href="/admin/documents">Documents</a> / <?=($document->exists()) ? 'Edit' : 'New'?></h2>
	<div>
		<a class="button" href="/admin/documents/edit/0">New Document</a>
		<button class="save" form="edit-form">Save</button>
	</div>
</header>

<form method="post" action="" enctype="multipart/form-data" id="edit-form">
	<div class="field"><?=$document->name->view()?></div>
	<div class="field"><?=$document->file->view()?></div>

	<?php if($document->exists()){?>
		<div class="field">
			<label>Markdown Snippet</label>
			<input type="text" readonly value="[doc.<?=$document->id?>]">
		</div>
	<?php }?>
</form>
