<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
	  
    <div class="center">
		
		<div class="dropbox"><img src="dropbox.png" width="90" height="90" ></div>
      <form method="post">
        <div class="txt_field">
          <input type="text" required  name="foldername">
          <span></span>
          <label>Digite o Nome da Pasta</label>
        </div>
        
		  
        <input type="submit" value="Criar Pasta" name="submit">
        <div class="signup_link">
          Anexar Arquivo? <a href="#">Clique aqui</a>
        </div>
      </form>
    </div>

  </body>
</html>

<?php

require_once('vendor/autoload.php');

use Spatie\Dropbox\Client;

$key = 'sl.BAGchzMUW4j0LrDDS1tVhjDJONBHXfHSiBPgiBmljScy9bZluIP5F7qgocSv6IW8VmAMmAH8xiBVx8ddUhgI-reUBpnqPXQMGXWOqq8F-PJNkYU_hBONJ6TSj7oLiCmHvz13CLiG-BLy'; //insira seu generated access token do Dropbox

$client = new Client($key); //instanciando um client do Dropbox

$client->createFolder( $_POST['foldername']); //cria a pasta Teste

print_r($client->listFolder('Teste')); //lista o conteúdo da pasta Teste

echo '<br/><br/>'; //apenas para quebrar linha

$client->copy('Coisas', 'Teste1'); //copia o conteúdo da pasta Coisas para a pasta Teste1

print_r($client->listFolder('Teste1')); //lista o conteúdo da pasta Teste1

echo '<br/><br/>'; //apenas para quebrar linha

$client->delete('Teste1/Book.xlsx'); //deleta o arquivo Book.xlsx na pasta Teste1

print_r($client->listFolder('Teste1')); //lista o conteúdo da pasta Teste1

echo '<br/><br/>'; //apenas para quebrar linha
?>


