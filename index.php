
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<title>Minha</title>

<style>
    .luz {
    width: 200px;
    height: 200px;
    background-color: black;
    margin: 20px auto;
    border-radius: 50%;
    }

    .luz.acender {
    background-color: yellow;
    }

    .luz.acender {
    background-color: yellow;
    box-shadow: 0 0 30px 15px yellow;
    transition: box-shadow 0.3s ease;
}

    .quadrado{
        width: 50px;
        height: 50px; 
        background-color: gray;
        margin: 20px auto;
        border-radius: 0 0 10px 10px;
    }
</style>

</head>

<body>
<h1>Olá, <span id="nome"></span></h1>
<p>Bem-vindo, digite seu nome abaixo para ver sua saudação.</p>
<input type="text" id="nomeInput" placeholder="Digite seu nome">

<div class="luz"></div>
<div class="quadrado"></div>

<button id="ligar">Clique para acender!</button>



<script src="script.js"></script>
</body>

</html>