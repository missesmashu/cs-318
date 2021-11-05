<section>
	<header>
		<h2>Snippets</h2>
		<a class="button" href="<?=f()->url->get('admin/snippets/edit/0')?>">New Snippet</a>
	</header>
	<div id="results"></div>
</section>

<script>
feedpage.init('/admin/snippets', 'Snippet');
</script>
