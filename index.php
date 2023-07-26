<?php

session_start();



// Função para conexão com o banco de dados
function connectDB()
{
  $host = 'localhost'; // Endereço do servidor do banco de dados
  $username = 'root'; // Usuário do banco de dados
  $password = 'caio1234'; // Senha do banco de dados
  $database = 'THEP'; // Nome do banco de dados

  // Conexão com o banco de dados
  $conn = new mysqli($host, $username, $password, $database);

  // Verifica se houve erro na conexão
  if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }
  return $conn;
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém as credenciais do formulário
  $nome = $_POST["nome"];
  $ano = $_POST["ano"];
  $turma = $_POST["turma"];
  $prof5Ano = $_POST["prof5ano"];
  $prof9AnoMat = $_POST["profMat9ano"];
  $prof9AnoPort = $_POST["profPort9ano"];
  // Conexão com o banco de dados
  $conn = connectDB();

  // Consulta para verificar se o usuário existe no banco de dados
  $query = "INSERT INTO alunos (nome, ano, turma, prof_5_ano, prof_9_ano_mat, prof_9_ano_port, data_hora) VALUES ('$nome', '$ano','$turma', '$prof5Ano', '$prof9AnoMat', '$prof9AnoPort',NOW())";
  // $result = $conn->query($query);


  if ($conn->query($query) === TRUE) {
    echo "Cadastro realizado com sucesso!";
  } else {
    echo "Erro ao cadastrar: " . $conn->error;
  }






  // Verifica se o usuário foi encontrado no banco de dados
  /* if ($result->num_rows === 1) {
    // Autenticação bem-sucedida, inicia a sessão
    $_SESSION['logged_in'] = true;
    $_SESSION['usuario'] = $usuario;

    // Redireciona para a página protegida
    header('Location: login.html');
    exit;
  } else {
    // Autenticação falhou, exibe uma mensagem de erro
    $error_message = 'Nome de usuário ou senha inválidos.';
    echo $error_message;
  } */

  // Fecha a conexão com o banco de dados
  $conn->close();
}
