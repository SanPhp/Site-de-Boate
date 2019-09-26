<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em';
 require 'header.php';
?>

<body>
	<?php $menuHome = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <?php 
		if(isset($_GET['acao']))
			$acao = $_GET['acao'];
		
		
		
		
		if($acao == 'editar_banner') {
	 ?>
    <section id="mudar_banners">
        <h1>Alterar Banner</h1>
   
    	<?php alterar_banner(); ?>
    
    	<h1>Banners Adicionados</h1>
            
        <?php listar_banner_backend(); ?>
        <?php deletar_banner(); ?>
        
    </section><!--mudar_banners-->
    
    
    <?php
		}//$acao == 'editar_banner
		
	   elseif ($acao == 'editar_cartaz') { 
	 ?>
     <section id="mudar_cartaz">
     	<h1>Alterar cartaz do próximo evento</h1>
     
     <?php alterar_cartaz_prox_evento(); ?>
     
     <h1>Cartaz Atual</h1>
     
     <?php listar_banner_prox_evento_backend(); ?>
     <?php deletar_banner_prox_evento(); ?>
     </section><!--mudar_cartaz-->
     
     <?php }// elseif editar_cartaz
	 	
		elseif($acao == 'programacao_index') {
	  ?>
      
     	<section id="programacao_index">
        	<h1>Alterar Programação</h1>
        
        	<?php alterar_programacao_index(); ?>
        
     	</section><!--mudar_cartaz-->
     
     
     
     <?php }//elseif programacao_index ?>
     
     
     


	<?php require 'footer.php'; ?>


</body>
</html>