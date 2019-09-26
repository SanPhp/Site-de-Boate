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
                <iframe width="530" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=arapongas+rua+tico+tico+34&amp;aq=&amp;sll=-24.614808,-51.321488&amp;sspn=5.980786,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tico+Tico,+34,+Arapongas+-+Paran%C3%A1,+86701-180&amp;t=m&amp;ll=-23.41263,-51.430392&amp;spn=0.003249,0.009162&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=arapongas+rua+tico+tico+34&amp;aq=&amp;sll=-24.614808,-51.321488&amp;sspn=5.980786,7.064209&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tico+Tico,+34,+Arapongas+-+Paran%C3%A1,+86701-180&amp;t=m&amp;ll=-23.41263,-51.430392&amp;spn=0.003249,0.009162&amp;z=16" style="color:#0000FF;text-align:left"></a></small>
                </div><!--mapa-->
            
            <div class="endereco">
            
            	<p>Deck'34 Lounge Bar</p>
                <p>Rua: Tico Tico, 34 - Centro</p>
                <p>Fone Fixo: - (43)3055-3494</p>
                <p>Fone Celular: -(43)8835-6364</p>
                <p>E-Mail: contato@deck34.com.br</p>
                <p>ARAPONGAS - PARANÁ</p>
            
            </div>
            
            <a href="index.php" title="Deck'34 Lounge Bar"><img src="estru/logo_contato.png" alt="Logo Deck'34 Lounge Bar" width="120"></a>

            </div><!--endereco_mapa-->
        
        
        	<form action="contato_ok.php" name="form" method="post" onSubmit="return validacao();">
            	
                <label for="nome">NOME</label>
                <input type="text" id="nome" name="nome">
                
                <label for="email">E-MAIL</label>
                <input type="text" id="email" name="email">
                
                <label for="fone">FONE</label>
                <input type="text" id="fone" name="fone">
                
                <label for="assunto">ASSUNTO</label>
                <input type="text" id="assunto" name="assunto">
                
                <label for="mensagem">MENSAGEM</label>
                <textarea id="mensagem" name="mensagem"></textarea>
                
                <input type="image" src="estru/botao_enviar.png" id="imagem" name="submit" title="Enviar">
                
            </form>

        
        </section><!--contato-->
        
  
	<?php require 'footer.php'; ?>


</body>
</html>