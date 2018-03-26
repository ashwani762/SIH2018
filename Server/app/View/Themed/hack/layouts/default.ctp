<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('style');
		echo $this->Html->css('materialize.min');
	?>
</head>

<body>
  	<nav class="teal lighten-1" role="navigation">
    	<div class="nav-wrapper container">
      		<a id="logo-container" href="#" class="brand-logo">BRIS</a>
    	</div>
  	</nav>

  	<div class="container">
    	<div class="section">

      		<div class="row">
        		<div class="col s12 center">
          			<h3><i class="mdi-content-send brown-text"></i></h3>
						<?php echo $this->Flash->render(); ?>

						<?php echo $this->fetch('content'); ?>
        		</div>
      		</div>

    	</div>
  	</div>

  	<footer class="page-footer teal">
    	<div class="footer-copyright">
      		<div class="container">
    			Made By Coderoids
      		</div>
    	</div>
  	</footer>

  	<?php	
  		echo $this->Html->script('https://code.jquery.com/jquery-2.1.1.min.js');
  		echo $this->Html->script('materialize.min');
		echo $this->Html->script('init');

	?>

</body>
</html>