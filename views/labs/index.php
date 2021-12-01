<h2>Labs</h2>

<?php foreach($labs as $lab){?>
	<a href="<?=$lab->path()?>"><?=$lab->name?></a>
<?php }?>