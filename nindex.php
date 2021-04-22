<?php
  //echo "testes";
  if (isset($_POST['submit'])) {
    $usuario = htmlentities($_POST['nome']);

    setcookie('Meu-cookie', $usuario, time()+3600);

    header('Location: pagina2.php');

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <label for="nome">Dê um nome ao cookie</label>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <br>
    <br>
    <input type="submit" value="Envia" name="submit">
  
  </form>
</body>
</html>
