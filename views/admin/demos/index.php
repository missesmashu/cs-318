<section>
	<header>
		<h2>Demos</h2>
		<a class="button" href="<?=f()->url->get('admin/demos/edit/0')?>">New Demo</a>
	</header>
	<div id="results"></div>
</section>

<script>
feedpage.init('/admin/demos', 'Demo');
</script>
