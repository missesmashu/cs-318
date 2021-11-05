<ul class="feed">
	<?php foreach($labs as $t){?>
		<li data-id="<?=$t->id?>">
			<a href="/admin/labs/edit/<?=$t->id?>">
				<?=$t->name?>
			</a>
			<a class="delete icon" title="Delete this lab" onclick="feedpage.delete('<?=$t->id?>');return false;" href="#"></a>
		</li>
	<?php }?>
</ul>
