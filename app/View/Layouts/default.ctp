<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Annonces en Tunisie et a l'etranger zmegry.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <?php echo $this->Html->css('bootstrap');?>
    <?php echo $this->Html->css('bootstrap-responsive');?>
    <?php echo $this->fetch('css'); ?>
  </head>

  <body>
  	
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">zmegry<?php //echo $this->fetch('title'); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="nav pull-right">
            	<li>
            		<a href="#">Se Connecter</a>
            	</li>
            	<li class="divider-vertical"></li>
            	<li class="dropdown open">
            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            			Creer compte
            			<b class="caret"></b>
            		</a>
            		<ul class="dropdown-menu">
            			<li><a href="#">Action</a></li>
            			<li><a href="#">Another Action</a></li>
            			<li class="divider"></li>
            			<li><a href="#">Separated link</a></li>
            		</ul>
            	</li>
            </ul>
          </div><!--/.nav-collapse -->
         </div>
      </div>
    </div>

    <div class="container">
    <?php echo $this->fetch('content');?>
    <?php echo $this->element('sql_dump');?>	
      
      <hr>
      <footer>
        <p>&copy; Company 2012</p>
      </footer>
     
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <?php //echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');?>
    <?php echo $this->Html->script('jquery');?>
    <?php echo $this->Html->script('bootstrap');?>
    <?php //echo $this->Html->script('bootstrap.min');?>
    <?php //echo $this->fetch('script'); ?>

  </body>
</html>
