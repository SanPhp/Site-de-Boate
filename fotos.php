<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em Arapongas';
 require 'header.php';
?>




<body>
	<?php $menuFotos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	<section id="fotos">
        	<h1>GALERIA DE FOTOS DECK'34</h1>
        
	  <?php listar_categoria_galeria_frontend(); ?>
        
        </section><!--fotos-->
    
  

	<?php require 'footer.php'; ?>


</body>
</html>