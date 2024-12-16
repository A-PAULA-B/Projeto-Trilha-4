<?php
require_once 'config.php';

//PEGANDO OS DADOS DO ORÇAMENTO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//PREPARAR COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES (?,?,?,?,?)");
$smtp->bind_param("sssss", $nome, $email, $mensagem, $data_atual, $hora_atual);

//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
    echo "Mensagem enviada com suceso!";
}else{
    echo "Erro no envio da mensagem: " .$smtp->error;
}
$smtp->close();
$conn->close();
?>