<?php

if (isset($_POST['enviar'])) {

    // Variáveis do formulário
    $nome  = $_POST['nome'];
    $bi    = $_POST['bi'];
    $area  = $_POST['area'];
    $obs   = $_POST['obs'];
    $email = $_POST['email'];

    // Mensagem normal
    $mensagem = "Saudações, chamo-me $nome, portador do BI $bi.
                 Candidatei-me para a área: $area.
                 Observações: $obs.";

    // Email de destino
    $destino = "teuemail@exemplo.com";
    $assunto = "Candidatura com Anexo";

    // ----- PROCESSAR O ANEXO -----
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {

        $arquivo_tmp  = $_FILES['cv']['tmp_name'];
        $nome_arquivo = $_FILES['cv']['name'];

        // Lê o ficheiro para base64
        $dados_arquivo = file_get_contents($arquivo_tmp);
        $anexo_base64  = chunk_split(base64_encode($dados_arquivo));

        // Tipo do arquivo (ex: application/pdf)
        $tipo_arquivo = $_FILES['cv']['type'];

        // Gera um boundary único
        $boundary = "XYZ-" . uniqid(time());
    }

    // ----- CABEÇALHOS -----
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "From: $nome <$email>\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // ----- MENSAGEM COM ANEXO -----
    $corpo_email = "--$boundary\r\n";
    $corpo_email .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    $corpo_email .= "<p><strong>Nome:</strong> $nome</p>";
    $corpo_email .= "<p><strong>Email:</strong> $email</p>";
    $corpo_email .= "<p><strong>Mensagem:</strong><br>$mensagem</p>\r\n";

    // Adicionar o anexo
    if (isset($anexo_base64)) {
        $corpo_email .= "--$boundary\r\n";
        $corpo_email .= "Content-Type: $tipo_arquivo; name=\"$nome_arquivo\"\r\n";
        $corpo_email .= "Content-Disposition: attachment; filename=\"$nome_arquivo\"\r\n";
        $corpo_email .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $corpo_email .= "$anexo_base64\r\n";
        $corpo_email .= "--$boundary--";
    }

    // Enviar email
    if (mail($destino, $assunto, $corpo_email, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar email.";
    }
}
?>
