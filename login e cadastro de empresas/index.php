<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Inicio</title>
</head>
<body>

<div class="header" >
    <h1>A MELHOR FORMA DE GERÊNCIAR SUAS EMPRESAS ESTÁ AQUI</h1>
    <a href="/manageasy/login">
    <button>Começar</button>
    </a>
  

</div>

<div class="video-background">
        <video autoplay loop muted>
            <source src="./public/img/video1.mp4" type="video/mp4">
            Seu navegador não suporta o vídeo em HTML5.
        </video>
    </div>

<?php
   


session_start();
require_once 'config/database.php';
require_once 'app/core/Router.php';

$router = new Router();

// Rotas para login
$router->add('login', 'UserController@login');
$router->add('authenticate', 'UserController@authenticate');
$router->add('logout', 'UserController@logout');

// Rotas para empresas
$router->add('companies', 'CompanyController@index');
$router->add('company/create', 'CompanyController@create');
$router->add('company/store', 'CompanyController@store');
$router->add('company/edit/{id}', 'CompanyController@edit');
$router->add('company/update/{id}', 'CompanyController@update');
$router->add('company/delete/{id}', 'CompanyController@delete');
$router->add('company/search', 'CompanyController@search');

$router->dispatch();


?>


<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Empresa</h4>
  	 			<ul>
  	 				<li><a href="#">Sobre</a></li>
  	 				<li><a href="#">Nossos serviços</a></li>
  	 				<li><a href="#">Politicas de privacidade</a></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Info</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">Suporte</a></li>
  	 				<li><a href="#">Feedback</a></li>
  	 				<li><a href="#">Trabalhe conosco</a></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		
  	 		
  	 	</div>
  	 </div>
  </footer>
    
</body>
</html>