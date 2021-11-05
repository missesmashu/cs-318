<ul class="feed">
	<?php foreach($documents as $t){?>
		<li data-id="<?=$t->id?>">
			<a href="/admin/documents/edit/<?=$t->id?>">
				<?=$t->name?>
			</a>
			<a class="delete icon" title="Delete this document" onclick="feedpage.delete('<?=$t->id?>');return false;" href="#"></a>
		</li>
	<?php }?>
</ul>
