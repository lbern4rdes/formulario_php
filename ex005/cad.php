<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php 
      $nome = $_GET["nome"] ?? "Não preenchido";
      $snome = $_GET["snome"] ?? "Não preenchido";
      echo "É um prazer te conhecer, <strong>$nome $snome</strong>.";
      echo " Esse é meu site!"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </main>
</body>
</html>