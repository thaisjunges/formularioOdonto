<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cro = $_POST['cro'];
    $uf = $_POST['uf'];
    $nasc = $_POST['nasc'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $mensagem = "
    Nome: $nome\n
    CPF: $cpf\n
    Email: $email\n
    Telefone: $telefone\n
    CRO: $cro\n
    UF: $uf\n
    Data de Nascimento: $nasc\n
    Estado: $estado\n
    Municipio: $municipio\n
    Bairro: $bairro\n
    Logradouro: $logradouro\n
    Numero: $numero\n
    Complemento: $complemento\n
    ";

    //DADOS SERÃO ENVIADOS PARA ESSE EMAIL
    $destinatario = "suporte11@invia.com.br";

    $assunto = "Novo cliente Invia Odonto";

    if (mail($destinatario, $assunto, $mensagem)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Erro: o formulário deve ser enviado via método POST.";
}
?>