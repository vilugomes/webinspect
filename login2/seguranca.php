<?php
/**
* Sistema de seguranÃ§a com acesso restrito
*
* Usado para restringir o acesso de certas pÃ¡ginas do seu site
*
* @author Thiago Belem <contato@thiagobelem.net>
* @link http://thiagobelem.net/
*
* @version 1.0
* @package SistemaSeguranca
*/

//  ConfiguraÃ§Ãµes do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexÃ£o com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessÃ£o com um session_start()?

$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' Ã© diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usuÃ¡rio e a senha a cada carregamento de pÃ¡gina?
// Evita que, ao mudar os dados do usuÃ¡rio no banco de dado o mesmo contiue logado.

$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // UsuÃ¡rio MySQL
$_SG['senha'] = 'root';                // Senha MySQL
$_SG['banco'] = 'contato';            // Banco de dados MySQL

$_SG['paginaLogin'] = 'login.php'; // PÃ¡gina de login

$_SG['tabela'] = 'usuarios';       // Nome da tabela onde os usuÃ¡rios sÃ£o salvos
// ==============================

// ======================================
//   ~ NÃ£o edite a partir deste ponto ~
// ======================================

// Verifica se precisa fazer a conexÃ£o com o MySQL
if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: NÃ£o foi possÃ­vel conectar-se ao banco de dados [".$_SG['banco']."].");
}

// Verifica se precisa iniciar a sessÃ£o
if ($_SG['abreSessao'] == true)
  session_start();

/**
* FunÃ§Ã£o que valida um usuÃ¡rio e senha
*
* @param string $usuario - O usuÃ¡rio a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuÃ¡rio foi validado ou nÃ£o (true/false)
*/
function validaUsuario($usuario, $senha) {
  global $_SG;

  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

  // Usa a funÃ§Ã£o addslashes para escapar as aspas
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);

  // Monta uma consulta SQL (query) para procurar um usuÃ¡rio
  $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);

  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuÃ¡rio Ã© invÃ¡lido
    return false;
  } else {
    // Definimos dois valores na sessÃ£o com os dados do usuÃ¡rio
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL

    // Verifica a opÃ§Ã£o se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessÃ£o com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }

    return true;
  }
}

/**
* FunÃ§Ã£o que protege uma pÃ¡gina
*/
function protegePagina() {
  global $_SG;

  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // NÃ£o hÃ¡ usuÃ¡rio logado, manda pra pÃ¡gina de login
    expulsaVisitante();
  } else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // HÃ¡ usuÃ¡rio logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessÃ£o batem com os dados do banco de dados
      if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        // Os dados nÃ£o batem, manda pra tela de login
        expulsaVisitante();
      }
    }
  }
}

/**
* FunÃ§Ã£o para expulsar um visitante
*/
function expulsaVisitante() {
  global $_SG;

  // Remove as variÃ¡veis da sessÃ£o (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin']);
}