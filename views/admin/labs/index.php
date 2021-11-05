<section>
	<header>
		<h2>Labs</h2>
		<a class="button" href="<?=f()->url->get('admin/labs/edit/0')?>">New Lab</a>
	</header>
	<div id="results"></div>
</section>

<script>
feedpage.init('/admin/labs', 'Lab');
</script>
