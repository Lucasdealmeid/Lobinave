<?php

if (isset($_POST['enviar'])) {
	
  //Variáveis
  $nome= $_POST['nome'];
	$bi = $_POST['bi'];
	$area = $_POST['area'];
	$obs = $_POST['obs'];

    $email = $_POST['email'];
    $mensagem = "Saudações caro ouvinte, chamo-me ".$nome." portador do bilhete de identidade número: ".$bi.", em anexo está o meu currículo vitae. Venho candidatar-me para a área de: ".$area.". E venho a observar que: ".$obs;;
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "lucaskiadikiadijoaoalmeida@gmail.com";
  $assunto = "Submissão de Candidatura";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";

}
?>
