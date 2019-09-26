<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


    $from = 'Deck34';
	$to = 'contato@deck34.com.br, sandro@hrsweb.com.br';
	$subject = 'Contato Site Deck34';
	$msg = "Formulário de Contato do Site: $from \n" .
	        "Nome: $nome \n" .
	        "Email: $email \n" .
			"Fone: $fone \n" .
			"Assunto: $assunto \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			
	header('refresh:3; url=http://www.deck34.com.br/mostruario/contato.php');
				
?>

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
        
        	
           
            
          

         <center><h3 style="font-family:'Dekar'; color:#fff; margin: 0px 0px 100px 0px; font-size:24px;">Mensagem enviada com sucesso!<br>
            <a href="http://www.deck34.com.br/contato.php" title="Clique para voltar ou aguarde o redirecionamento" style="color:#9C0;">Voltar</a></h3></center>
        
        
        
        
        </section><!--contato-->
        
  
	<?php require 'footer.php'; ?>


</body>
</html>