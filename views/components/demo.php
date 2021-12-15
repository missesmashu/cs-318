<div class="<?=$demo->size?> demo">
	<?php if(!empty($demo->html->get())){?>
		<div>
			<h4>HTML</h4>
			<div class="html editor"><?=htmlentities($demo->html)?></div>
		</div>
	<?php }?>
	<?php if(!empty($demo->css->get())){?>
		<div>
			<h4>CSS</h4>
			<div class="css editor"><?=$demo->css?></div>
		</div>
	<?php }?>
	<?php if(!empty($demo->html->get())){?>
		<div>
			<h4>Preview</h4>
			<iframe class="preview"></iframe>
		</div>
	<?php }?>
</div>