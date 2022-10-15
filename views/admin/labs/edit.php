<header>
	<h2><a href="/admin/labs">Labs</a> / <?=($lab->exists()) ? 'Edit' : 'New'?></h2>
	<div>
		<a class="button" href="/admin/labs/edit/0">New Lab</a>
		<button class="save" form="edit-form">Save</button>
	</div>
</header>

<form method="post" action="" id="edit-form">
	<div class="field"><?=$lab->name->view()?></div>
	<div class="field"><?=$lab->slug->view()?></div>
	<div class="field"><?=$lab->goal->view()?></div>
	<div class="field"><?=$lab->learn->view()?></div>
	<div class="field"><?=$lab->practice->view()?></div>
</form>
