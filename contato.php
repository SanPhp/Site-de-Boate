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
                <iframe width="530" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117700.45693540592!2d-43.59959552592809!3d-22.79730247495676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio%20de%20Janeiro%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1569380386916!5m2!1spt-BR!2sbr" style="color:#0000FF;text-align:left"></a></small>
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