<?php


  //reconfigurar cookie
  //setcookie('Meu-cookie', 'Frank Sinatra', time() + (86400 * 30));

  //  deletar cookie basta determinar time para hora pssada
  setcookie('Meu-cookie', 'Frank Sinatra', time() - 3600);

  // checando se existe cookies
  if(count($_COOKIE) > 0) {
    //echo 'Existem ' . count($_COOKIE) . ' cookies salvos<br>'; 
    print_r($_COOKIE['Meu-cookie']);
  } else {
    echo 'Nenhum cookie salvo';
  }


  if(isset($_COOKIE['Meu-cookie'])) {
    echo "Usuário " . $_COOKIE['Meu-cookie'] . " está configurado ";
  } else {
    echo "Usuário não configurado";
  }

?>