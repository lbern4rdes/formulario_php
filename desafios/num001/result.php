<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da escolha</title>
</head>
<body>
<header>
    <h1>Resultado Final</h1>
  </header>
  <main>
    <?php 
      $numero = $_GET["nun"] ?? "Não preenchido";
      
      echo "É um prazer te conhecer, <strong>$nome $snome</strong>.";
      echo " Esse é meu site!"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </main>
</body>
</html>