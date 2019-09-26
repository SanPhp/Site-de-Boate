<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em';
 require 'header.php';
?>




<body>
	<?php $menuVideos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	<section id="videos">

        			
        	<h1>GALERIA DE VIDEOS DECK'34</h1>
            
            <section id="video_editar">
            
            <?php adicionar_video(); ?>
            
            </section><!--video_editar-->
            
            
            <h1>Videos Adicionados</h1>
            
           <?php lista_video_backend(); ?> 
           <?php deletar_video_backend(); ?>          
            
        </section><!--videos--> 
  
	<?php require 'footer.php'; ?>


</body>
</html>