<section class="labs">
	<header>
		<h2>Labs</h2>
		<hr>
	</header>

	<?php foreach($labs as $lab){?>
		<a href="/labs/<?=$lab->id?>"><?=$lab->name?></a>
	<?php }?>
</section>