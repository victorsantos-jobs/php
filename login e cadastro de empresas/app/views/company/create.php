<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app/public/style.css">

    <title>Cadastrar Empresa</title>
</head>
<body>
  


    <div class="container1">
        <h1>Cadastrar empresa</h1>
        <form action="/manageasy/company/store" method="POST">

        <div>
            <div class="nome-empresa">
            <input type="text" id="name" name="name" placeholder="Nome da empresa" required><br>
            </div>
            <div class="left">
          
            <input type="text" id="phone1" name="phone1" placeholder="telefone 1" required><br>
            
            <input type="text" id="phone2" name="phone2" placeholder="telefone 2"><br>
            
            <input type="text" id="cep" name="cep" placeholder="CEP" required><br>
           
            <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" required><br>
            
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            
            <input type="text" id="street" name="street" placeholder="Rua" required><br>
          
            <input type="text" id="numero" name="number" placeholder="Número" required>
            </div>
            <div class="right">
           
            <input type="text" id="neighborhood" name="neighborhood" placeholder="Bairro" required><br>
          
            <input type="text" id="city" name="city" placeholder="Cidade" required><br>
        
            <input type="text" id="state" name="state" placeholder="Estado" required><br>
         
            <input type="text" id="complement" name="complement" placeholder="Complemento"><br>
           
            <input type="text" id="facebook" name="facebook" placeholder="Facebook"><br>

            <input type="text" id="instagram" name="instagram" placeholder="Instagram"><br>

            <input type="text" id="website" name="website" placeholder="Site"><br>
            </div>
            <input type="submit" value="Cadastrar">

            </div>
        </form>
    </div>


    <style>



.header{
    color: #363636 ;
    height:  100%;
    text-align: center;
    border-radius: 15px;

    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 2px solid rgba(255,255, 255, .2);

}



/* Estilos para o vídeo de fundo */
.video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

.video-background video {
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}




.box{
    color: black;
    font-family: serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 300px;
    height: 260px;
    text-shadow: white;

    padding: 50px;
    border-radius: 10px;
    text-align: center;

   margin-left: auto;

    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 2px solid rgba(255,255, 255, .2);

}


button{
    border: 2px;
}

button:hover{
border-color: black;
border: 5px;

}
input{
    border-radius: 50px;
}


body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
    margin: 0;
    text-align: center;
    align-items: center;
    background-color: #bbbbbb;    
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}

.footer{
	background-color: #4F4F4F;
    padding: 8px 0;
    bottom: 0;
    right: 0;
    left: 0;
    margin: 0;
    position: fixed;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;

	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: white;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 10px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}

.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}
</style>
<div class="video-background">
        <video autoplay loop muted>
            <source src="./public/img/video1.mp4" type="video/mp4">
            Seu navegador não suporta o vídeo em HTML5.
        </video>
    </div>

</body>
</html>
