<ul class="feed">
	<?php foreach($snippets as $t){?>
		<li data-id="<?=$t->id?>">
			<a href="/admin/snippets/edit/<?=$t->id?>">
				<?=$t->name?>
			</a>
			<a class="delete icon" title="Delete this snippet" onclick="feedpage.delete('<?=$t->id?>');return false;" href="#"></a>
		</li>
	<?php }?>
</ul>
