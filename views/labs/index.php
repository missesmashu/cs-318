<section class="labs labs-index">
	<header>
		<h2>Labs</h2>
		<hr>
	</header>

	<?php foreach($labs as $lab){?>
		<a href="<?=$lab->path()?>"><?=$lab->name?></a>
	<?php }?>
</section>