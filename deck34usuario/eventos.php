<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em';
 require 'header.php';
?>




<body>
	<?php $menuEventos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    
 	<section id="eventos">
    	<h1 id="eventos">EVENTOS</h1>
        
        <div class="listar_eventos">
        
        <?php alterar_programacao_pagina_eventos(); ?>
        
        </div><!--listar_eventos-->
    
    
    </section>
    
  

	<?php require 'footer.php'; ?>


</body>
</html>