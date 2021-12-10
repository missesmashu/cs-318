<div class="demo">
	<?php if(!empty($demo->html->get())){?>
		<div class="html editor"><?=htmlentities($demo->html)?></div>
	<?php }?>
	<?php if(!empty($demo->css->get())){?>
		<div class="css editor"><?=$demo->css?></div>
	<?php }?>
	<?php if(!empty($demo->html->get())){?>
		<iframe class="preview"></iframe>
	<?php }?>
</div>