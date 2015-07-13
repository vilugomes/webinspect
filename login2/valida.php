<?php
// Inclui o arquivo com o sistema de seguranÃ§a
require_once("seguranca.php");

// Verifica se um formulÃ¡rio foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variÃ¡veis com o que foi digitado no formulÃ¡rio
  // Detalhe: faz uma verificaÃ§Ã£o com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

  // Utiliza uma funÃ§Ã£o criada no seguranca.php pra validar os dados digitados
  if (validaUsuario($usuario, $senha) == true) {
    // O usuÃ¡rio e a senha digitados foram validados, manda pra pÃ¡gina interna
    header("Location: index.php");
  } else {
    // O usuÃ¡rio e/ou a senha sÃ£o invÃ¡lidos, manda de volta pro form de login
    // Para alterar o endereÃ§o da pÃ¡gina de login, verifique o arquivo seguranca.php
    expulsaVisitante();
  }
}