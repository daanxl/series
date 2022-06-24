<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novelas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="banner">
    <img src="imagens/banner2.png">
</div>
<div class="texto">
    <h2>Cadastre suas Novelas Favoritas</h2>
</div>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarnovelas.php">
    <p><label for="titulo">Título:</label><input type="text" name="titulo" id="titulo" size="36" maxlenght="100"></p>
    <p><label for="atrizprotagonista">Atriz Protagonista:</label><input type="text" name="atrizprotagonista" id="atrizprotagonista" size="26" maxlenght="100"></p>
    <p><label for="atorprotagonista">Ator Protagonista:</label><input type="text" name="atorprotagonista" id="atorprotagonista" size="27" maxlenght="100"></p>
    <p><label for="totalepisodios">Total Episódios:</label><input type="number" name="totalepisodios" id="totalepisodios" size="30" maxlenght="100"></p>
    <p>Sinopse</p>
    <p><textarea name="sinopse" id="sinopse" class="textarea"></textarea></p>
    <br><br>
    <div class="cadastrar">
    <input type="image" src="imagens/cadastrar.png"> 
</div>
</form>
<br><br><br><br>
<a href="index.php"><img src="imagens/inicio.png"></a>

<div class="rodape">
<img src="imagens/rodape2.png">
</div>
</body>
</html>
