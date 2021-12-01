<section class="labs">
	<header>
		<h2>Labs</h2>
		<hr>
	</header>

<?php foreach($labs as $lab){?>
	<a href="<?=$lab->path()?>"><?=$lab->name?></a>
<?php }?>
</section>