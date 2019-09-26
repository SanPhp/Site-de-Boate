<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em';
 require 'header.php';
?>




<body>
	<?php $menuHome = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    
    

   <section class="banner">
   <span><a href="index_editar.php?acao=editar_banner" title="">Editar Banner</a></span>
    	<div class="box_skitter box_skitter_large">
<ul>
<li><a href="#cube"><img src="banner/images/banner_teste.jpg" class="cube" /></a><div class="label_text"><p>cube</p></div></li>

<li><a href="#cube"><img src="banner/images/banner_teste.jpg" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
	
</ul>
	</div><!--box_skitter box_skitter_large-->
  </section><!--banner-->
  
  
  
  <section class="programacoes_fotos">
  
  	<article class="proximo_envento">
    <span><a href="index_editar.php?acao=editar_cartaz" title="">Editar Cartaz</a></span>
    <h1>Próximo Evento</h1>
    
    <?php listar_banner_prox_evento_frontend_admin(); ?>
    
    </article><!--proximo_envento-->
    
    
    
    <article class="programacao">
    <span><a href="index_editar.php?acao=programacao_index" title="">Alterar Programação</a></span>
    
      <h1 id="eventos_indexx">Programação</h1>
        <div class="programacao_index"><?php listar_programacao_index(); ?></div>
    </article><!--programacao-->
    
     
  
  	<article class="ultimas_fotos">
    <h1>Fotos</h1>
    
    	<a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">			        <span>Exemplo de utilização de tooltips.</span></a>
        
        <a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">        <span>Festa da Tequila ( 00/00/0000 )</span></a>
        
        
        <a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">        <span>Exemplo de utilização de tooltips.</span></a>
        
    </article><!--ultimas_fotos-->
    
    
    <article class="ultimos_videos">
    <h1>Videos</h1>
    
    	<a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">			        <span>Culture ( XX/XX/XXXX ) </span></a>
        
        <a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">        <span>Festa da Tequila ( 00/00/0000 )</span></a>
        
        
        <a href="#" title="evento" class="tooltip"><img src="estru/imagem_fotos_teste.jpg" alt="Fotos Eventos">        <span>Exemplo de utilização de tooltips.</span></a>
        
    </article><!--ultimos_videos-->
    
    <article class="plugin_facebook">
    <h1>Facebook</h1>
    
    	
        
    </article><!--plugin_facebook-->

  </section><!--programacoes_fotos-->

	<?php require 'footer.php'; ?>


</body>
</html>