<h2>Labs</h2>

<?php foreach($labs as $lab){?>
	<a href="/labs/<?=$lab->id?>"><?=$lab->name?></a>
<?php }?>