<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em Arapongas';
 require 'header.php';
?>




<body>
	<?php $menuFotos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	<section id="fotos">
        	<h1>GALERIA DE FOTOS DECK'34</h1>
            
            <section id="galeria_editar">
            
            <?php inserir_categoria_galeria(); ?>
            
           </section> <!--galeria_editar-->
           
           <h1>Categorias e Eventos Adicionados</h1>
           
           
           <?php listar_categoria_galeria_backend(); ?>
           <?php deletar_categoria_galeria_backend(); ?>

           </section><!--fotos-->
    
  

	<?php require 'footer.php'; ?>


</body>
</html>