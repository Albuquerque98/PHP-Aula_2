<?php
// Coletando dados do formulário
$nome = isset($_POST["nome"]) ? $_POST["nome"] :"Anônimo";
$email = $_POST["email"] ?? "Não Informado"; // Null coalescing operation
$idade = $_POST["idade"] ?? "Não Informado";

// Armazenando dados em um array associativo
$usuario = [
    "nome"=> $nome,
    "email"=> $email,
    "idade" => $idade
];

// Função pra saudação
function saudacao($nome) {
    return "Olá ". $nome .", seja bem-bindo ao nosso sistema!";
}

// Exibindo mensagem de boas-vindas
echo saudacao($usuario["nome"]) . "<br>";
echo "Aqui estão os detalhes do seu cadastro:<br>";
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Email: " . $usuario['email'] . "<br>";
echo "Idade " > $usuario['idade'] . "<br>";

// Adicionando comentários explicativos ao código
// Este script processa as entradas de um formulário e exibe uma mensagem personalizada

?>