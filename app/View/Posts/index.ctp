
<div class="page-header">
	<h2>Liste des annonces</h2>
</div>
<?php foreach($posts as $k=>$v):?>
	<?php echo $v['Post']['created']."&nbsp";?>	
	<?php echo "<strong>".$this->Html->link($v['Post']['name'],array('action'=>'show',$v['Post']['id']))."</strong>&nbsp";?>
	<?php echo $v['Post']['content']."<br />";?>
<?php endforeach?>	

