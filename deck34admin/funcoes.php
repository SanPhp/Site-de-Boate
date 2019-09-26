<?php //<!--------------------------- ALTERAR BANNER --------------------------------->?>

<?php function alterar_banner() { ?>
		<?php

		/**
		 * 
		 * @copyright (c) 2012, SANDRO GONÇALVES
		 */

			if(isset($_POST['submit'])) {

				

				$titulo = $_POST['titulo'];

				$alt = $_POST['alt'];

				$link = $_POST['link'];

				$banner_imagem = date('dmHisu') . '-' . $_FILES['banner_imagem']['name'];

				$banner_imagem_type = $_FILES['banner_imagem']['type'];

				$banner_imagem_size = $_FILES['banner_imagem']['size'];

				

				//if(!empty($link)) {

					

				if(($banner_imagem_type == 'image/jpeg') || ($banner_imagem_type == 'image/jpg') || ($banner_imagem_type == 'image/png') && ($banner_imagem_size > 0) && ($banner_imagem_size <= DECK34_MAXFILESIZE)) {

				

				$target = DECK34_UPLOADPATH_BANNER . $banner_imagem;

				if(move_uploaded_file($_FILES['banner_imagem']['tmp_name'], $target)) {

				

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$query = "INSERT INTO banner_prox_evento (title, alt, link, banner, tipo) VALUES ('$titulo', '$alt',                         '$link', '$banner_imagem', 'banner')";

				$sql = mysqli_query($dbc, $query)

				or die("mysqli_error");

				mysqli_close($dbc);

				echo'<p class="sucesso">Banner Adicionado com Sucesso!</p>';

				

				$titulo = '';

				$alt = '';

				$link = '';

				

				

				

				

				}//if move_uploaded_file

				

				}//if image/type

				else {

					echo '<p class="error">Insira uma imagem do tipo JPG ou PNG e menor que 1MB!</p>';

				}//else image/type

				

				

				/*}//if empty

				else {

					echo '<p class="error">Por favor, preencha o campo ( Link )</p>';

				}//else empty*/

			

			

			}//isset submit



		?>	



	<form action="" name="alterar_banner" method="post" enctype="multipart/form-data">

        

        	<label>Tamanho do Banner sem distorção 1000 x 355</label><br>

        

        	<label for="titulo">Titulo (title)</label>

            <input type="text" id="titulo" name="titulo">

            

            <label for="alt">Alt</label>

            <input type="text" id="alt" name="alt">

            

            <label for="link">link</label>

            <input type="text" id="link" name="link">

            

            <label for="link">Imagem</label>

            <input type="file" id="banner_imagem" name="banner_imagem">

            

            <input type="submit" id="submit" name="submit" value="Adicionar">

                        

        

        </form>





<?php }//alterar_banner ?>



<?php //<!--------------------------- ALTERAR BANNER --------------------------------->?>



<?php //<!--------------------------- LISTAR BANNER BACKEND --------------------------------->?>



<?php function listar_banner_backend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM banner_prox_evento WHERE tipo = 'banner'";

		$sql = mysqli_query($dbc, $query)

		or die("mysqli_error");

		

		while($row = mysqli_fetch_array($sql)) {

		

			$id_banner_prox_evento = $row['id_banner_prox_evento'];

			$banner = $row['banner'];

		?>	

		

        <figure>

        	<img src="<?php echo DECK34_UPLOADPATH_BANNER . $banner ?>" alt="" width="440" height="156">

            <figcaption><a href="index_editar.php?acao=editar_banner&deletar=deletar&unlink=<?php echo $banner ?>&id_banner_prox_evento=<?php echo $id_banner_prox_evento; ?>" title="Deletar banner?">Deletar</a></figcaption>

        </figure>

        

        <?php }//while ?>

        

  <?php mysqli_close($dbc); ?>

  

<?php }//lista_banner_backend ?>



<?php //<!--------------------------- /LISTAR BANNER BACKEND --------------------------------->?>





<?php //<!--------------------------- LISTAR BANNER FRONTEND --------------------------------->?>



<?php function listar_banner_frontend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM banner_prox_evento WHERE tipo = 'banner'";

		$sql = mysqli_query($dbc, $query)

		or die("mysqli_error");

		

		while($row = mysqli_fetch_array($sql)) {

			

			$titulo = $row['title'];

			$alt = $row['alt'];

			$link = $row['link'];

			$banner = $row['banner'];

			

		?>	



       <li><a href="<?php if(!empty($link)) { echo $link; } else { echo '#'; } ?>" title="<?php echo $titulo ?>"><img src="<?php echo DECK34_UPLOADPATH_BANNER_FRONTEND . $banner ?>" alt="<?php echo $alt ?>" class="cube" width="1000" height="355"></a><div class="label_text"><p>cube</p></div></li>

        

        <?php }//while ?>

	<?php mysqli_close($dbc); ?>

<?php }//lista_banner_frontend?>



<?php //<!--------------------------- /LISTAR BANNER FRONTEND --------------------------------->?>





<?php //<!--------------------------- DELETAR BANNER --------------------------------->?>



<?php function deletar_banner() { ?>



	<?php

		if(isset($_GET['id_banner_prox_evento']) && $_GET['unlink'] && $_GET['deletar']){

			$id_banner_prox_evento = $_GET['id_banner_prox_evento'];

			$banner = $_GET['unlink'];

			$deletar = $_GET['deletar'];

			

	if($deletar == 'deletar') {

		

	@unlink(DECK34_UPLOADPATH_BANNER . $banner);



	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "DELETE FROM banner_prox_evento WHERE id_banner_prox_evento = $id_banner_prox_evento";

	$sql = mysqli_query($dbc, $query)

	or die("mysqli_error");

	mysqli_close($dbc);



	 

	echo '<p class="sucesso_banner">Banner deletado com sucesso!</p>';

}//if(isset

	 ?>

<?php }//if == deletar ?>

<?php }//deletar_banner() ?>





<?php //<!--------------------------- DELETAR BANNER --------------------------------->?>





<?php //<!--////////////////////////////////////////////////////////////////////////-->?>





<?php //<!--------------------------- ALTERAR CARTAZ PROX EVENTO --------------------------------->?>







<?php function alterar_cartaz_prox_evento() { ?>



		<?php

			if(isset($_POST['submit'])) {

				

				$titulo = $_POST['titulo'];

				$alt = $_POST['alt'];

				/*$link = $_POST['link'];*/

				$banner_imagem = date('dmHisu') . '-' . $_FILES['banner_proximo_evento']['name'];

				$banner_imagem_type = $_FILES['banner_proximo_evento']['type'];

				$banner_imagem_size = $_FILES['banner_proximo_evento']['size'];

				

				if(empty($link)) {

					

				if(($banner_imagem_type == 'image/jpeg') || ($banner_imagem_type == 'image/jpg') || ($banner_imagem_type == 'image/png') && ($banner_imagem_size > 0) && ($banner_imagem_size <= DECK34_MAXFILESIZE)) {

				

				$target = DECK34_UPLOADPATH_BANNER . $banner_imagem;

				if(move_uploaded_file($_FILES['banner_proximo_evento']['tmp_name'], $target)) {

				

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$query = "INSERT INTO banner_prox_evento (title, alt, banner_proximo_evento, tipo) VALUES ('$titulo', '$alt', '$banner_imagem', 'cartaz')";

				$sql = mysqli_query($dbc, $query)

				or die("mysqli_error");

				mysqli_close($dbc);

				echo'<p class="sucesso">Banner Adicionado com Sucesso!</p>';

				

				$titulo = '';

				$alt = '';

				$link = '';



				}//if move_uploaded_file

				

				}//if image/type

				else {

					echo '<p class="error">Insira uma imagem do tipo JPG ou PNG e menor que 1MB!</p>';

				}//else image/type

				

				

				}//if empty

				else {

					echo '<p class="error">Por favor, preencha o campo ( Link )</p>';

				}//else empty

			

			

			}//isset submit



		?>	



	<form action="" name="alterar_banner" method="post" enctype="multipart/form-data">

        

        	<label>Tamanho do Banner sem distorção 480 x 610</label><br>

        

        	<label for="titulo">Titulo (title)</label>

            <input type="text" id="titulo" name="titulo">

            

            <label for="alt">Alt</label>

            <input type="text" id="alt" name="alt">

            

            <!--<label for="link">link</label>

            <input type="text" id="link" name="link">-->

            

            <label for="link">Imagem</label>

            <input type="file" id="banner_proximo_evento" name="banner_proximo_evento">

            

            <input type="submit" id="submit" name="submit" value="Adicionar">

                        

        

        </form>





<?php }//alterar_cartaz_prox_evento() ?>



<?php //<!--------------------------- ALTERAR CARTAZ PROX EVENTO --------------------------------->?>



<?php //<!-----------------LISTAR CARTAZ PROX EVENTO BACKEND PARA DELETAR ---------------------------->?>



<?php function listar_banner_prox_evento_backend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM banner_prox_evento WHERE tipo = 'cartaz'";

		$sql = mysqli_query($dbc, $query)

		or die("mysqli_error");

		

		while($row = mysqli_fetch_array($sql)) {

		

			$titulo = $row['title'];

			$id_banner_prox_evento = $row['id_banner_prox_evento'];

			$banner = $row['banner_proximo_evento'];

		?>	

		

        <figure id="id_cartaz">

        	<img src="<?php echo DECK34_UPLOADPATH_BANNER . $banner ?>" alt="" width="300" height="382" title="<?php echo $titulo ?>">

            <figcaption><a href="index_editar.php?acao=editar_cartaz&deletar=deletar&unlink=<?php echo $banner ?>&id_banner_prox_evento=<?php echo $id_banner_prox_evento; ?>" title="Deletar banner?">Deletar</a></figcaption>

        </figure>

        

        <?php }//while ?>

        

  <?php mysqli_close($dbc); ?>

  

<?php }//lista_banner_backend ?>







<?php //<!-------------- /LISTAR CARTAZ PROX EVENTO BACKEND PARA DELETAR ------------------------->?>



<?php //<!--------------------------- LISTAR CARTAZ PROX EVENTO BACKEND --------------------------------->?>



<?php function listar_banner_prox_evento_frontend_admin() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM banner_prox_evento WHERE tipo = 'cartaz'";

		$sql = mysqli_query($dbc, $query)

		or die("mysqli_error");

		

		while($row = mysqli_fetch_array($sql)) {

			

			$titulo = $row['title'];

			$alt = $row['alt'];

			$link = $row['link'];

			$banner = $row['banner_proximo_evento'];

			

		?>	



      <img src="<?php echo DECK34_UPLOADPATH_BANNER_BACKTEND . $banner ?>" alt="<?php echo $alt ?>" width="480" height="610" title="<?php echo $titulo ?>">

        

        <?php }//while ?>

	<?php mysqli_close($dbc); ?>

<?php }//lista_banner_backendendadmin?>





<?php //<!--------------------------- LISTAR CARTAZ PROX EVENTO BACKEND --------------------------------->?>





<?php //<!--------------------------- LISTAR CARTAZ PROX EVENTO FRONTEND --------------------------------->?>



<?php function listar_banner_prox_evento_frontend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM banner_prox_evento WHERE tipo = 'cartaz'";

		$sql = mysqli_query($dbc, $query)

		or die("mysqli_error");

		

		while($row = mysqli_fetch_array($sql)) {

			

			$titulo = $row['title'];

			$alt = $row['alt'];

			$link = $row['link'];

			$banner = $row['banner_proximo_evento'];

			

		?>	



	<div class="slide">

<a href="#" title="<?php echo $titulo ?>"><img src="<?php echo DECK34_UPLOADPATH_BANNER_FRONTEND . $banner ?>" width="480" height="505" alt="<?php echo $alt ?>"></a>

	

	</div>





     

        <?php }//while ?>

	<?php mysqli_close($dbc); ?>

<?php }//lista_banner_frontend ?>





<?php //<!--------------------------- LISTAR CARTAZ PROX EVENTO FRONTEND --------------------------------->?>









<?php //<!--------------------------- DELETAR CARTAZ PROX EVENTO --------------------------------->?>



<?php function deletar_banner_prox_evento() { ?>



	<?php

		if(isset($_GET['id_banner_prox_evento']) && $_GET['unlink'] && $_GET['deletar']){

			$id_banner_prox_evento = $_GET['id_banner_prox_evento'];

			$banner = $_GET['unlink'];

			$deletar = $_GET['deletar'];

			

	if($deletar == 'deletar') {

		

	@unlink(DECK34_UPLOADPATH_BANNER . $banner);



	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "DELETE FROM banner_prox_evento WHERE id_banner_prox_evento = $id_banner_prox_evento";

	$sql = mysqli_query($dbc, $query)

	or die("mysqli_error");

	mysqli_close($dbc);



	 

	//echo '<p class="sucesso_banner">Banner deletado com sucesso!</p>';

}//if(isset

	 ?>

<?php }//if == deletar ?>

<?php }//deletar_banner_prox_evento() ?>



<?php //<!--------------------------- /DELETAR CARTAZ PROX EVENTO --------------------------------->?>

<?php //<!--/////////////////////////////////////////////////////////////////////////////////////-->?>









<?php //<!--------------------------- ALTERAR PROGRAMACAO DA INDEX --------------------------------->?>

<?php function alterar_programacao_index() { ?>



	<?php

			if(isset($_POST['submit'])) {

			$programacao_index = $_POST['programacao_index'];

			

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$query = "UPDATE programacao SET programacao_index = '$programacao_index' WHERE numero_da_programacao = '1'";

				$sql = mysqli_query($dbc, $query);

				

				echo'<p class="sucesso">Programação atualizada com sucesso!</p>';

			

			mysqli_close($dbc);

			

			}//isset submit

		

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM programacao";

		$sql = mysqli_query($dbc, $query);

		$row = mysqli_fetch_array($sql);

		

			$programacao_index = $row['programacao_index'];

			

		mysqli_close($dbc);

	?>



<form action="" method="post" enctype="multipart/form-data">

	

 <textarea name="programacao_index"><?php if(!empty($programacao_index)) echo $programacao_index ?></textarea>

    

<input type="submit" id="submit" name="submit" value="Atualizar">



</form>



<?php }//alterar_programacao_index() ?>



<?php //<!--------------------------- /ALTERAR PROGRAMACAO DA INDEX --------------------------------->?>







<?php //<!------------------------- LISTAR PROGRAMACAO DA INDEX FRONTEND --------------------------------->?>

<?php function listar_programacao_index() { ?>



	<?php

		

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM programacao WHERE numero_da_programacao = '1'";

		$sql = mysqli_query($dbc, $query);

		$row = mysqli_fetch_array($sql);

		

			$programacao_index = $row['programacao_index'];

			

			echo $programacao_index;

			

		mysqli_close($dbc);

	 ?>



<?php } //listar_programacao_index() ?>

<?php //<!------------------------- /LISTAR PROGRAMACAO DA INDEX FRONTEND ------------------------------>?>

<?php ///////////////////////////////////////////////////////////////////////////////////////////////-->?>









<?php //<!------------------------- ALTERAR PROGRAMACAO DA PAGINA EVENTOS ---------------------------->?>

<?php function alterar_programacao_pagina_eventos() { ?>



	<?php

			if(isset($_POST['submit'])) {

			$programacao_pagina = $_POST['programacao_pagina'];

			

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$query = "UPDATE programacao SET programacao_pagina = '$programacao_pagina' WHERE numero_da_programacao = '2'";

				$sql = mysqli_query($dbc, $query);

				

				echo'<p class="sucesso">Programação atualizada com sucesso!</p>';

			

			mysqli_close($dbc);

			

			}//isset submit

		

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM programacao WHERE numero_da_programacao = '2'";

		$sql = mysqli_query($dbc, $query);

		$row = mysqli_fetch_array($sql);

		

			$programacao_pagina = $row['programacao_pagina'];

			

		mysqli_close($dbc);

	?>



<form action="" method="post" enctype="multipart/form-data">

	

  <textarea name="programacao_pagina" style="height:700px;"><?php if(!empty($programacao_pagina)) echo $programacao_pagina ?></textarea>

    

  <input type="submit" id="submit" name="submit" value="Atualizar">



</form>



<?php }//alterar_programacao_pagina_eventos() ?>



<?php //<!------------------------ /ALTERAR PROGRAMACAO DA PAGINA EVENTOS --------------------------------->?>









<?php //<!------------------------ LISTAR PROGRAMACAO DA INDEX FRONTEND --------------------------------->?>

<?php function listar_programacao_pagina_eventos() { ?>



	<?php

		

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM programacao WHERE numero_da_programacao = '2'";

		$sql = mysqli_query($dbc, $query);

		$row = mysqli_fetch_array($sql);

		

			$programacao_pagina = $row['programacao_pagina'];

			

			echo $programacao_pagina;

			

		mysqli_close($dbc);

	 ?>



<?php } //listar_programacao_index() ?>

<?php //<!------------------------- /LISTAR PROGRAMACAO DA INDEX FRONTEND --------------------------------->?>

<?php //<!--/////////////////////////////////////////////////////////////////////////////////////////////-->?>











<?php //<!--------------------------- INSERIR CATEGORIA GALERIA --------------------------------->?>



<?php function inserir_categoria_galeria() { ?>

	

	<?php 

		if(isset($_POST['submit'])) {

		

		$titulo = $_POST['titulo'];

		$capa = $_FILES['capa']['name'];

		$capa_type = $_FILES['capa']['type'];

		$capa_size = $_FILES['capa']['size'];

		

		if(!empty($titulo)) {

			

			if(($capa_type == 'image/jpg') || ($capa_type == 'image/jpeg') || ($capa_type == 'image/pjpeg') || ($capa_type == 'image/png') && ($capa_size > 0) && ($capa_size <= DECK34_MAXFILESIZE_CAPA)) {

				

				$target = DECK34_UPLOADPATH_CAPA_ALBUM . $capa;

				if(move_uploaded_file($_FILES['capa']['tmp_name'], $target)) {

					

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				

				$query = "INSERT INTO categoria_galeria (titulo, capa_miniatura) VALUES ('$titulo', '$capa')";

				$sql = mysqli_query($dbc, $query);

				echo '<p class="sucesso">Categoria Adicionada com sucesso</p>';

				

				$titulo = '';

				

				mysqli_close($dbc);

				

				}//if move_uploaded_file

				

			}//if type

			else {

				echo '<p class="error">Por favor insira arquivos do tipo JPG ou PNG menor que 500MB!</p>';

			}// else type

			

		} //if !empty

		else {

			echo '<p class="error">Campo Titulo Obrigatório!</p>';

		}// else vazio

		

		}//if isset submit

	?>

	

	<form action="" method="post" enctype="multipart/form-data">

    

    	<label for="warning">Adicionar Album</label><br>

   		<label for="warning">Imagem sem distorção 200 x 150 Pixel</label><br>



    	<label for="titulo">Titulo (Nome da Festa e Data)</label>

    	<input type="text" id="titulo" name="titulo" placeholder="Nome Evento 00-00-0000" value="<?php if(!empty($titulo)) echo $titulo; ?>">

        

        <label for="capa">Capa Album</label>

        <input type="file" id="capa" name="capa">

        

        <input type="submit" id="submit" name="submit" value="Adicionar">

        

    

    </form>





<?php }//inserir_categoria_galeria() ?>

<?php //<!--------------------------- /INSERIR CATEGORIA GALERIA -------------------------------->?>









<?php //<!--------------------------- LISTAR CATEGORIA GALERIA BACKEND -------------------------------->?>

<?php function listar_categoria_galeria_backend() { ?>



	<?php

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "SELECT * FROM categoria_galeria ORDER BY id_categoria_galeria DESC";

	$sql = mysqli_query($dbc, $query);

	

	while($row = mysqli_fetch_array($sql)) { 

	

		$id_categoria_galeria = $row['id_categoria_galeria'];

		$titulo = $row['titulo'];

		$capa_miniatura = $row['capa_miniatura'];

	?>

		<?php

		//CONSULTA PARA CONTAR LINHA DA GALERIA

		$dbc2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query2 = "SELECT * FROM galeria WHERE id_categoria_galeria = '$id_categoria_galeria'";

		$sql2 = mysqli_query($dbc2, $query2);

		$conta_linha = mysqli_num_rows($sql2);

		

		 ?>

 <figure>

 	<figcaption><a href="javascript:if(confirm('Tem Certeza que Deseja Excluir este Album?')) {location='fotos.php?capa_miniatura=<?php echo $capa_miniatura ?>&id_categoria_galeria=<?php echo $id_categoria_galeria ?>';}" title="Deletar Album?">Deletar album ( <?php echo $conta_linha ?> )</a></figcaption>

    

   <a href="fotos_evento_editar.php?titulo=<?php echo $titulo ?>&id_categoria_galeria=<?php echo $id_categoria_galeria ?>" title="" class="tooltip"><img src="<?php echo DECK34_UPLOADPATH_CAPA_ALBUM . $capa_miniatura ?>" alt="Galeria de Fotos" width="150" height="100"><span><?php echo $titulo ?></span></a>

 </figure>

        

	<?php }//while ?>



<?php }//listar_categoria_galeria_backend() ?>



<?php //<!--------------------------- /LISTAR CATEGORIA GALERIA BACKEND -------------------------------->?>









<?php //<!--------------------------- LISTAR CATEGORIA GALERIA FRONTEND -------------------------------->?>

<?php function listar_categoria_galeria_frontend() { ?>

	

    <?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM categoria_galeria ORDER BY id_categoria_galeria DESC";

		$sql = mysqli_query($dbc, $query)

		or die('mysqli_error');

		

		while( $row = mysqli_fetch_array($sql)){

		

			$id_categoria_galeria = $row['id_categoria_galeria'];

			$titulo = $row['titulo'];

			$capa_miniatura = $row['capa_miniatura'];

		?>





     <figure>

        <a href="fotos_evento.php?titulo=<?php echo $titulo ?>&id_categoria_galeria=<?php echo $id_categoria_galeria ?>" title="<?php echo $titulo ?>" class="tooltip"><img src="<?php echo DECK34_UPLOADPATH_CAPA_ALBUM_FRONTEND . $capa_miniatura ?>" alt="Galeria de Fotos" width="200" height="150"><span><?php echo $titulo ?></span></a>

     </figure>



	<?php }//while?>



<?php } //listar_categoria_galeria_frontend() ?>



<?php //<!--------------------------- /LISTAR CATEGORIA GALERIA FRONTEND -------------------------------->?>











<?php //<!--------------------------- DELETAR CATEGORIA GALERIA BACKEND -------------------------------->?>



<?php function deletar_categoria_galeria_backend() { ?>



	<?php

		if(isset($_GET['id_categoria_galeria']) && ($_GET['capa_miniatura'])) {

		

			$id_categoria_galeria = $_GET['id_categoria_galeria'];

			$capa_miniatura = $_GET['capa_miniatura'];

		

		$dbc2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query2 = "SELECT * FROM galeria WHERE id_categoria_galeria = '$id_categoria_galeria'";

		$sql2 = mysqli_query($dbc2, $query2)

		or die('mysqli_error');

		

		while ($row = mysqli_fetch_array($sql2)) {

			

			$foto = $row['foto'];

			$miniatura = $row['miniatura'];

	

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "DELETE FROM categoria_galeria WHERE id_categoria_galeria = '$id_categoria_galeria'";

		$sql = mysqli_query($dbc, $query)

		or die('mysqli_error');

		

		@unlink(DECK34_UPLOADPATH_CAPA_ALBUM . $capa_miniatura);

		@unlink(DECK34_UPLOADPATH_NORMAL . $foto);

		@unlink(DECK34_UPLOADPATH_THUBNAILS . $miniatura);

		

		

		}//while

		

		mysqli_close($dbc2);

		}//if isset

	 ?>



<?php } //deletar_categoria_galeria_backend() ?>

<?php //<!--------------------------- /DELETAR CATEGORIA GALERIA BACKEND -------------------------------->?>









<?php //<!--------------------------- INSERIR IMAGEM GALERIA BACKEND -------------------------------->?>

<?php function inserir_imagem_galeria_backend() { ?>



			<?php

			

				$id_categoria_galeria = $_GET['id_categoria_galeria'];

				$titulo = $_GET['titulo'];

				

				if(isset($_POST['submit'])) {

					

					$pasta = '../imagens/imgG/';

					

			     foreach($_FILES['imagem']['error'] as $key => $error) {

				

				

					if($error == UPLOAD_ERR_OK) {

							

							$tmp_name = $_FILES['imagem']['tmp_name'][$key];

							$nome = date('dmHisu') . '-' . $_FILES['imagem']['name'][$key];

							$uploadfile = $pasta . basename($nome);

				$nova = '../imagens/imgP/';		

				$largura = 150;  

			       

             	$img = imagecreatefromjpeg($tmp_name);

                $x   = imagesx($img);

                $y   = imagesy($img);

                $altura = ($largura * $y)/$x;

                $nova = imagecreatetruecolor($largura, $altura);

                imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);

                imagejpeg($nova, DECK34_UPLOADPATH_THUBNAILS . $nome);

                imagedestroy($img);

                imagedestroy($nova);

							

							

							

					if(move_uploaded_file($tmp_name, $uploadfile)) {

					$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			        $query = "INSERT INTO galeria (id_categoria_galeria, titulo, alt, foto, miniatura) VALUES                      ('$id_categoria_galeria', '$titulo', '$titulo', '$nome', '$nome')";

			        $sql = mysqli_query($dbc, $query);

			        mysqli_close($dbc);

					

						echo'<p class="sucesso">Imagem adicionada com sucesso!</p>';

					}

					else {

						echo'<p class="error">Erro!</p>';

					}

							

					

					}//UPLOAD_ERR_OK

					

			

				

				}//foreach

				

			}//isset

				

				

				/*if(isset($_POST['submit'])) {

					

			foreach($_FILES['imagem']['name'] as $imagem) {

						

				$name = md5(uniqid(rand(), true)).".jpg";   

			    $nova = '../imagens/imgP/';

			    $largura = 150;  

			       

             	$img = imagecreatefromjpeg($imagem['tmp_name']);

                $x   = imagesx($img);

                $y   = imagesy($img);

                $altura = ($largura * $y)/$x;

                $nova = imagecreatetruecolor($largura, $altura);

                imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);

                imagejpeg($nova, DECK34_UPLOADPATH_THUBNAILS . $name);

                imagedestroy($img);

                imagedestroy($nova);

				

				

	//era pra fazer o upload da imagem grande

			$foto2 = $_FILES['imagem'];

			move_uploaded_file($foto2['tmp_name'], DECK34_UPLOADPATH_NORMAL .$name);

			

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			$query = "INSERT INTO galeria (id_categoria_galeria, titulo, alt, foto, miniatura) VALUES ('$id_categoria_galeria', '$titulo', '$titulo', '$name', '$name')";

			$sql = mysqli_query($dbc, $query);

			mysqli_close($dbc);

			echo '<p class="sucesso">Imagem adicionada com sucesso!</p>';

						

											

					}//foreach

					

				}//isset submit*/

			

			 ?>







	<form action="" method="post" enctype="multipart/form-data">

    

 		<label for="insira_uma_imagem">Escolha uma imagem para inserir neste album</label>   

    	<input type="file" id="imagem" name="imagem[]" multiple="multiple" class="multi" maxlength="10" accept="jpeg|jpg">

        <input type="submit" id="submit" name="submit"> 

    

    </form>



<h1><?php echo $titulo ?></h1>

<?php } ?>



<?php //<!--------------------------- /INSERIR IMAGEM GALERIA BACKEND -------------------------------->?>







<?php //<!--------------------------- LISTAR IMAGENS GALERIA BACKEND -------------------------------->?>



<?php function listar_imagem_galeria_backend() { ?>



	<?php

	$id_categoria_galeria = $_GET['id_categoria_galeria'];

	

	 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	 $query = "SELECT * FROM galeria WHERE id_categoria_galeria = '$id_categoria_galeria'";

	 $sql = mysqli_query($dbc, $query);

	 

	 while ($row = mysqli_fetch_array($sql)) {

		 

		 $id_galeria = $row['id_galeria'];

		 $id_categoria_galeria = $row['id_categoria_galeria'];

		 $titulo = $row['titulo'];

		 $foto = $row['foto'];

		 $miniatura = $row['miniatura'];

		 

	 	 ?>

         

         <div id="check">

        

         <a class='highslide' href='<?php echo DECK34_UPLOADPATH_NORMAL . $foto ?>' onClick="return hs.expand(this)"><img src="<?php echo DECK34_UPLOADPATH_THUBNAILS . $miniatura ?>" alt="<?php echo $titulo ?>" width="80%"></a><br>

         

         <a href="fotos_evento_editar.php?titulo=<?php echo $titulo ?>&foto=<?php echo $foto ?>&id_categoria_galeria=<?php echo $id_categoria_galeria ?>&id_galeria=<?php echo $id_galeria ?>" title="Deletar?">Deletar Imagem</a>

         </div>

         

         

         <?php }//while ?>

	

    <?php mysqli_close($dbc) ?> 

    

<?php }//function listar_imagem_galeria_backend() ?>





<?php //<!--------------------------- /LISTAR IMAGENS GALERIA BACKEND -------------------------------->?>











<?php //<!--------------------------- DELETE IMAGENS GALERIA BACKEND -------------------------------->?>



<?php function delete_imagem_galeria_backend() { ?>



	<?php

		if(isset($_GET['id_galeria']) && ($_GET['foto'])) {

		

			$id_galeria = $_GET['id_galeria'];

			$foto = $_GET['foto'];

			

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			$query = "DELETE FROM galeria WHERE id_galeria = '$id_galeria'";

			mysqli_query($dbc, $query);

			mysqli_close($dbc);

			

			@unlink(DECK34_UPLOADPATH_NORMAL . $foto);

			@unlink(DECK34_UPLOADPATH_THUBNAILS . $foto);

			

		}

	 ?>



<?php }//delete_imagem_galeria_backend() ?>



<?php //<!--------------------------- /DELETE IMAGENS GALERIA BACKEND -------------------------------->?>











<?php //<!--------------------------- LISTAR IMAGENS GALERIA FRONTEND INDEX ------------------------------>?>



<?php function listar_imagem_galeria_pagina_index_frontend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query =  "SELECT * FROM categoria_galeria ORDER BY id_categoria_galeria DESC LIMIT 3";

		$sql = mysqli_query($dbc, $query);

		

		while($row = mysqli_fetch_array($sql)) {

			

			$id_categoria_galeria = $row['id_categoria_galeria'];

			$titulo = $row['titulo'];

			$capa = $row['capa_miniatura'];

	?>

    

    <a href="fotos_evento.php?titulo=<?php echo $titulo ?>&id_categoria_galeria=<?php echo $id_categoria_galeria ?>" title="<?php echo $titulo ?>" class="tooltip"><img src="<?php echo DECK34_UPLOADPATH_CAPA_ALBUM_FRONTEND . $capa ?>" alt="<?php echo $titulo ?>" width="150" height="100">

    <span><?php echo $titulo ?></span></a>

        

        

<?php }//while ?>





<?php }//listar_imagem_galeria_pagina_index_frontend() ?>

<?php //<!--------------------------- /LISTAR IMAGENS GALERIA FRONTEND INDEX ---------------------------->?>











<?php //<!------------- LISTAR IMAGENS EVENTO GALERIA FRONTEND PAGINA FOTOS_EVENTO -------------------->?>

<?php function listar_imagem_galeria_pagina_fotos_evento_frontend() { ?>



	<?php

		if(isset($_GET['id_categoria_galeria']) && ($_GET['titulo'])) {

		

			$id_categoria_galeria = $_GET['id_categoria_galeria'];

			$titulo = $_GET['titulo'];

		echo '<h1>' . $titulo . '</h1>';

		}//if isset

	

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query =  "SELECT * FROM galeria WHERE id_categoria_galeria = $id_categoria_galeria";

		$sql = mysqli_query($dbc, $query);

		

		while($row = mysqli_fetch_array($sql)) {

			

			$id_categoria_galeria = $row['id_categoria_galeria'];

			$titulo = $row['titulo'];

			$alt = $row['alt'];

			$foto = $row['foto'];

			$miniatura = $row['miniatura'];

	?>

    

    <a class='highslide' href='<?php echo DECK34_UPLOADPATH_NORMAL_FRONTEND . $foto ?>' onClick="return hs.expand(this)">

		    <img src='<?php echo DECK34_UPLOADPATH_THUBNAILS_FRONTEND . $foto ?>' alt='<?php echo $alt ?>'></a>

        

        

<?php }//while ?>



<?php }//listar_imagem_galeria_pagina_fotos_evento_frontend() ?>



<?php //<!------------ /LISTAR IMAGENS EVENTO GALERIA FRONTEND PAGINA FOTOS_EVENTO ------------------->?>

<?php /////////////////////////////////////////////////////////////////////////////////////////-->?>











<?php //<!--------------------------- INCLUIR VIDEO BACKEND -------------------------------->?>



<?php function adicionar_video() { ?>



			<?php

			if(isset($_POST['submit'])) {

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$titulo_video = mysqli_real_escape_string($dbc, trim($_POST['titulo']));

				$link_video = mysqli_real_escape_string($dbc, trim($_POST['link_video']));

				$imagem_video = date('dmHisu') . '-' . $_FILES['imagem_video']['name'];

				$imagem_video_type = $_FILES['imagem_video']['type'];

				$imagem_video_size = $_FILES['imagem_video']['size'];

				

				if(!empty($link_video) && !empty($titulo_video)) {

					

				if(($imagem_video_type == 'image/jpeg') || ($imagem_video_type == 'image/jpg') || ($imagem_video_type == 'image/png') && (                    $imagem_video_size > 0) && ($imagem_video_size <= DECK34_MAXFILESIZE)) {

				

				$target = DECK34_UPLOADPATH_CAPA_VIDEO . $imagem_video;

				if(move_uploaded_file($_FILES['imagem_video']['tmp_name'], $target)) {

				

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				$query = "INSERT INTO video (titulo_video, embed_video, imagem_video) VALUES ('$titulo_video', '$link_video', '$imagem_video')";

				$sql = mysqli_query($dbc, $query)

				or die("mysqli_error");

				mysqli_close($dbc);

				echo'<p class="sucesso">Video Adicionado com Sucesso!</p>';

				

				$titulo_video = '';

				$link_video = '';

				

				}//if move_uploaded_file

				

				}//if image/type

				else {

					echo '<p class="error">Insira uma imagem do tipo JPG ou PNG e menor que 1MB!</p>';

				}//else image/type

				

				

				}//if empty

				else {

					echo '<p class="error">Por favor, preencha o campo ( Link ) ou ( Titulo )</p>';

				}//else empty

			

			}//isset submit



		?>	



<form action="" method="post" enctype="multipart/form-data">

        

        	<label>Tamanho da Imagem Video sem distorção 400 x 225</label><br>

        

        	<label for="titulo">Titulo Evento Video</label>

            <input type="text" id="titulo" name="titulo" value="<?php if(!empty($titulo_video)) echo $titulo_video ?>" placeholder="Máximo de Character 50">

                        

            <label for="link">Link do Video</label>

            <input type="text" id="link" name="link_video" placeholder="//www.youtube.com/embed/y_sR66T1Als?rel=0" value="<?php if(!empty($link_video)) echo $link_video ?>">

            

            <label for="link">Imagem do Video</label>

            <input type="file" id="imagem_video" name="imagem_video">

            

            <input type="submit" id="submit" name="submit" value="Adicionar">

                        

        </form>

        

<?php }//adicionar_video() ?>

<?php //<!--------------------------- /INCLUIR VIDEO BACKEND -------------------------------->?>









<?php //<!--------------------------- LISTAR VIDEO BACKEND -------------------------------->?>

<?php function lista_video_backend() { ?>

	

    <?php 

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM video ORDER BY id_video DESC";

		$sql = mysqli_query($dbc, $query);

		

		while($row = mysqli_fetch_array($sql)) {

			

			$id_video = $row['id_video'];

			$titulo_video = substr($row['titulo_video'],0,50);

			$embed_video = $row['embed_video'];

			$imagem_video = $row['imagem_video'];

		?>

		

		<div class="videos_block">

            <h2><?php echo $titulo_video ?></h2>

            

           <a href="<?php echo $embed_video ?>" 

		   onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 600, height: 481, 

		   allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 

		   preserveContent: false, objectLoadTime: 'after'})"

           class="highslide">

           

           <img src="<?php echo DECK34_UPLOADPATH_CAPA_VIDEO . $imagem_video ?>" alt="<?php echo $titulo_video ?>" width="400" height="225"></a><br>

           <a href="videos.php?imagem_video=<?php echo $imagem_video ?>&id_video=<?php echo $id_video ?>" title="Deletar Video?">Deletar Video</a>

            </div><!--videos_block-->

        

		<?php }//while ?>

        

		<?php mysqli_close($dbc); ?>

        

<?php }//lista_video_backend() ?> 



<?php //<!--------------------------- /LISTAR VIDEO BACKEND -------------------------------->?>











<?php //<!--------------------------- DELETAR VIDEO BACKEND -------------------------------->?>



<?php function deletar_video_backend() { ?>



	<?php

		if(isset($_GET['id_video']) && ($_GET['imagem_video'])) {

			

			$id_video = $_GET['id_video'];

			$imagem_video = $_GET['imagem_video'];

			

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			$query = "DELETE FROM video WHERE id_video = '$id_video'";

			$sql = mysqli_query($dbc, $query);

			mysqli_close($dbc);

			

			@unlink(DECK34_UPLOADPATH_CAPA_VIDEO . $imagem_video);

			

		}//if isset

	

	?>

<?php }//deletar_video_backend ?>

<?php //<!--------------------------- /DELETAR VIDEO BACKEND -------------------------------->?>











<?php //<!--------------------------- LISTAR VIDEO FRONTEND -------------------------------->?>



<?php function lista_video_frontend() { ?>



	<?php

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM video ORDER BY id_video DESC";

		$sql = mysqli_query($dbc, $query);

		

		while($row = mysqli_fetch_array($sql)) {

			

			$titulo_video = substr($row['titulo_video'],0,50);

			$embed_video = $row['embed_video'];

			$imagem_video = $row['imagem_video'];

		?>

        

         <div class="videos_block">

            <h2><?php echo $titulo_video ?></h2>

            

           <a href="<?php echo $embed_video ?>" 

		   onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 600, height: 481, 

		   allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 

		   preserveContent: false, objectLoadTime: 'after'})"

           class="highslide">

           

           <img src="<?php echo DECK34_UPLOADPATH_CAPA_VIDEO_FRONTEND . $imagem_video ?>" alt="Video Evento" width="400" height="225"></a>

           </div><!--videos_block-->

        

		

        <?php }//while ?>

        

	<?php mysqli_close($dbc); ?>

    

<?php }//lista_video_frontend() ?>



<?php //<!--------------------------- /LISTAR VIDEO FRONTEND -------------------------------->?>













<?php //<!--------------------------- LISTAR VIDEO PAGINA INDEX FRONTEND -------------------------------->?>



<?php function listar_video_pagina_index_frontend() { ?>



	<?php 

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "SELECT * FROM video ORDER BY id_video DESC";

		$sql = mysqli_query($dbc, $query);

		

		while( $row = mysqli_fetch_array($sql)) {

			

			$id_video = $row['id_video'];

			$titulo_video = $row['titulo_video'];

			$imagem_video = $row['imagem_video'];

		?>

		

        <a href="videos.php" title="<?php echo $titulo_video ?>" class="tooltip"><img src="<?php echo DECK34_UPLOADPATH_CAPA_VIDEO_FRONTEND . 		        $imagem_video ?>" alt="<?php echo $titulo_video ?>" width="150" height="100">

        <span><?php echo $titulo_video ?></span></a>

		

        

        <?php } //while ?>

        

	<?php mysqli_close($dbc); ?>

    

	<?php } //listar_video_pagina_index_frontend() ?>



<?php //<!--------------------------- /LISTAR VIDEO PAGINA INDEX FRONTEND -------------------------------->?>