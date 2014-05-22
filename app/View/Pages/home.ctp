<?php
//echo $this->assign('title', 'Mon Projet');
?>


<div class="row">
<div class="span2">
        <ul class="nav nav-tabs nav-stacked">
		   <li><a href="#">Recherche</a></li>
		   <li><a href="#">Rencontre le vendeur</a></li>
		   <li><a href="#">Conclure l'affaire</a></li>
	</ul>
</div>
<div class="span10">
	    
	<div class="hero-unit">
    <h1>Zmegry</h1>
    <p>la bonne affaire est au coin de la rue ! Vendez, Acheter fixer des rencontres avec les vendeurs
    	 a cote de chez vous ou ceux qui resident dans toute l'europe </p>
    <p>
    <?php echo $this->Html->link('Déposez gratuitement vos annonce',array('controller'=>'posts','action'=>'ajoutannonce')
    ,array('class'=>'btn btn-primary btn-larg')); ?>
    </p>
    </div>
    <?php foreach($cities as $k=>$v):?>
	   <?php echo $v['City']['name']."<br />";?>
    <?php endforeach;?>	   
    
</div>
<div>

