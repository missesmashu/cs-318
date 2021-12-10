<ul class="feed">
	<?php foreach($demos as $t){?>
		<li data-id="<?=$t->id?>">
			<a href="/admin/demos/edit/<?=$t->id?>">
				<?=$t->name?>
			</a>
			<a class="delete icon" title="Delete this demo" onclick="feedpage.delete('<?=$t->id?>');return false;" href="#"></a>
		</li>
	<?php }?>
</ul>
