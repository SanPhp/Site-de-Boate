<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em';
 require 'header.php';
?>




<body>
	<?php $menuFotos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	<section id="fotos_evento">
        	
            
            <section id="fotos_evento_inserir_imagem">
            
            <?php inserir_imagem_galeria_backend(); ?>
            
            </section><!--fotos_evento_inserir_imagem-->
            
            <?php listar_imagem_galeria_backend(); ?>
            <?php delete_imagem_galeria_backend(); ?>
            
                     
            
            
        </section><!--fotos_evento-->
    
  

	<?php require 'footer.php'; ?>


</body>
</html>