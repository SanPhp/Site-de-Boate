<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em Arapongas';
 require 'header.php';
?>




<body>
	<?php $menuVideos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	<section id="videos">
        	<h1>GALERIA DE VIDEOS DECK'34</h1>
            
              <?php lista_video_frontend(); ?>       
            
        </section><!--videos--> 
  
	<?php require 'footer.php'; ?>


</body>
</html>