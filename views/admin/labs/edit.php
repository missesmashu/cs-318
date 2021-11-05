<header>
	<h2>Editing Lab</h2>
	<a class="button" href="/admin/labs">Back to labs</a>
	<a class="button" href="<?=f()->url->get('admin/labs/edit/0')?>">New Lab</a>
	<input type="submit" value="Save" class="green" form="edit-form">
</header>

<form method="post" action="<?=f()->url->current()?>" id="edit-form">
	<div class="field"><?=$lab->name->view()?></div>
	<div class="field"><?=$lab->slug->view()?></div>
	<div class="field"><?=$lab->goal->view()?></div>
	<div class="field"><?=$lab->learn->view()?></div>
	<div class="field"><?=$lab->practice->view()?></div>
</form>
