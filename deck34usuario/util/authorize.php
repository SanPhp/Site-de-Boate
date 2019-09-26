<?php
  // User name and password for authentication
  $username = 'teste';
  $password = 'teste';

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
    // The user name/password are incorrect so send the authentication headers
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Deck 34!"');
	header("Content-type: text/html; charset=utf-8");
    exit('<h2>Sistema Admistrativo Deck 34, AVISO!</h2>Desculpe, você tem que digitar um nome de usuario e senha validos para acessar está página');
  }
?>
