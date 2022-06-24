<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Séries</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="banner">
    <img src="imagens/banner.png">
</div>
<div class="texto">
    <h2>Cadastre suas Séries Favoritas</h2>
</div>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarseries.php">
    <p><label for="titulo">Título:</label><input type="text" name="titulo" id="titulo" size="36" maxlenght="100"></p>
    <p><label for="atrizprincipal">Atriz Principal:</label><input type="text" name="atrizprincipal" id="atrizprincipal" size="28" maxlenght="100"></p>
    <p><label for="atorprincipal">Ator Principal:</label><input type="text" name="atorprincipal" id="atorprincipal" size="28" maxlenght="100"></p>
    <p><label for="qtdtemporadas">QTD Temporadas:</label><input type="number" name="qtdtemporadas" id="qtdtemporadas" size="30" maxlenght="100"></p>
    <p><label for="totalepisodios">Total Episódios:</label><input type="number" name="totalepisodios" id="totalepisodios" size="30" maxlenght="100"></p>
    <p>Sinopse</p>
    <p><textarea name="sinopse" id="sinopse" class="textarea"></textarea></p>
    <br>
    <div class="cadastrar">
    <input type="image" src="imagens/cadastrar.png"> 
</div>
</form>
<br><br><br><br><br>
<a href="index.php"><img src="imagens/inicio.png"></a>
<div class="rodape">
<img src="imagens/rodape.png">
</div>
</body>
</html>
