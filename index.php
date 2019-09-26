<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em Arapongas';
 require 'header.php';
?>




<body>
	<?php $menuHome = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
   <section class="banner">
    
    	<div class="box_skitter box_skitter_large">
<ul>

<?php listar_banner_frontend(); ?>
	
</ul>
	</div><!--box_skitter box_skitter_large-->
  </section><!--banner-->
  
  
  <section class="programacoes_fotos">
  
  	<article class="proximo_envento">
    <h1>Próximo Evento</h1>
    
    
    <div id="slides">
		<div class="slides_container">
    
    
    <?php listar_banner_prox_evento_frontend(); ?>
    
   </div><!--slides_container-->

</div><!--slides-->
    
    
    </article><!--proximo_envento-->
    
    
    
    <article class="programacao">
      <h1 id="eventos_indexx">Programação</h1>
       <div class="programacao_index"><?php listar_programacao_index(); ?></div>
    </article><!--programacao-->
    
     
  
  	<article class="ultimas_fotos">
    <h1>Fotos</h1>
    
    	<?php listar_imagem_galeria_pagina_index_frontend(); ?>
        
    </article><!--ultimas_fotos-->
    
    
    <article class="ultimos_videos">
    <h1>Videos</h1>
    
    	<?php listar_video_pagina_index_frontend(); ?>
        
    </article><!--ultimos_videos-->
    
    <article class="plugin_facebook">
    <h1>Facebook</h1>
    
    
 
    	
        
    </article><!--plugin_facebook-->

  </section><!--programacoes_fotos-->

	<?php require 'footer.php'; ?>


</body>
</html>