<?php
	$title = 'Home - Deck 34 Lounge Bar - Com diversas atrações semanalmente em Arapongas';
    require 'header.php';
?>




<body>
	<?php $menuContato = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    	
        <section id="contato">
        	<h1>CONTATO</h1>
            
            <p>Se ainda restou alguma dúvida sobre a  nosso estabelecimento, aqui é o espaço para entrar em               contato e solicitar outras informações sobre nosso lounge bar, fotos, reservas, preços, entre               outros assuntos.</p>
        
        	<div class="endereco_mapa">
            	
                <div class="mapa">
                <iframe width="428" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=arapongas+rua+tico+tico+34&amp;aq=&amp;sll=-24.614808,-51.321488&amp;sspn=5.980786,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tico+Tico,+34,+Arapongas+-+Paran%C3%A1,+86701-180&amp;t=m&amp;ll=-23.41263,-51.430392&amp;spn=0.003249,0.009162&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=arapongas+rua+tico+tico+34&amp;aq=&amp;sll=-24.614808,-51.321488&amp;sspn=5.980786,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tico+Tico,+34,+Arapongas+-+Paran%C3%A1,+86701-180&amp;t=m&amp;ll=-23.41263,-51.430392&amp;spn=0.003249,0.009162&amp;z=16" style="color:#0000FF;text-align:left"></a></small>
                </div><!--mapa-->
            
            <div class="endereco">
            
            	<p>Deck'34 Lounge Bar</p>
                <p>Rua: Tico Tico, 34 - Centro</p>
                <p>Fone: RAFAEL - 43)8801-1718</p>
                <p>Fone: HELCIO -(43)8832-6871</p>
                <p>E-Mail: deck34@deck34.com.br</p>
                <p>ARAPONGAS - PARANÁ</p>
            
            </div>
            
            <a href="index.php" title="Deck'34 Lounge Bar"><img src="estru/logo_contato.png" alt="Logo Deck'34 Lounge Bar"></a>

            </div><!--endereco_mapa-->
        
        
        	<form action="" method="post">
            	
                <label for="nome">NOME</label>
                <input type="text" id="name" name="name">
                
                <label for="email">E-MAIL</label>
                <input type="text" id="email" name="email">
                
                <label for="fone">FONE</label>
                <input type="text" id="fone" name="fone">
                
                <label for="mensagem">MENSAGEM</label>
                <input type="text" id="mensagem" name="mensagem" style="height:200px;">
                
                <input type="image" src="estru/botao_enviar.png" id="imagem" name="submit" title="Enviar">
                
            </form>

        
        </section><!--contato-->
        
  
	<?php require 'footer.php'; ?>


</body>
</html>