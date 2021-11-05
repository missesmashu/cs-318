<section>
	<header>
		<h2>Documents</h2>
		<a class="button" href="<?=f()->url->get('admin/documents/edit/0')?>">New Document</a>
	</header>
	<div id="results"></div>
</section>

<script>
feedpage.init('/admin/documents', 'Document');
</script>
