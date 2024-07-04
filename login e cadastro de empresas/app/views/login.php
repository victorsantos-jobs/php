<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<br>
<br>
<div class="box">
    
    <h1>Login</h1>
            <form action="/manageasy/login" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
</form>

</div>
<style>


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

</style>
<div class="video-background">
        <video autoplay loop muted>
            <source src="./public/img/video2.mp4" type="video/mp4">
            Seu navegador não suporta o vídeo em HTML5.
        </video>
    </div>

     
</body>
</html>
