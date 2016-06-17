<?php

$resultado = null;

if(!empty($_POST['contactname']) && ($_POST['contactemail'])){
	
	// Definindo variáveis para as globais
	$contactname		= $_POST['contactname'];
	$contactphone		= $_POST['contactphone'];
	$contactmail		= $_POST['contactemail'];
	$contactcity		= $_POST['contactcity'];
	$contactmsg			= $_POST['contactmsg'];

	// E-mail que enviará a mensagem
	$emailfrom			= 'bot@izzyweb.com.br';

	// E-mail que receberá a mensagem
	$emailto			= 'joanez-dev@izzyweb.com.br';

	// Definindo variáveis da função mail
	$quebra_linha = "\n";
	$assunto			= "Contato via Website";

	/* Mensagem HTML do e-mail. */
	$mensagemHTML = '<p>Contato via Website</p>
	<p><b>Nome:</b> ' . $contactname . '
	<p><b>Cidade:</b> ' . $contactcity .'
	<p><b>E-mail:</b> ' . $contactmail .'
	<p><b>Telefone:</b> ' . $contactphone . '<hr>
	<p><b>Mensagem:</b> ' . $contactmsg . '</p>';

	// O return-path deve ser ser o mesmo e-mail do remetente.
	
    $headers = "MIME-Version: 1.1" . $quebra_linha;
    $headers .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
    $headers .= "From: " . $emailfrom . $quebra_linha;
    $headers .= "Return-Path: " . $emailfrom . $quebra_linha;
    $headers .= "Reply-To: " . $contactmail . $quebra_linha;

	mail($emailto, $assunto, $mensagemHTML, $headers, "-r" . $emailfrom);

	$resultado = "Mensagem enviada com sucesso! Obrigado por entrar em contato conosco"; // Mensagem de sucesso

} else {

	$resultado = "Houve um erro ao enviar sua mensagem. Por favor, tente novamente"; // Mensagem de erro
}
echo $resultado;
// Limpar variáveis globais
unset ($_POST['contactname']);
unset ($_POST['contactmail']);
unset ($_POST['contactcity']);
unset ($_POST['contactphone']);
unset ($_POST['contactmsg']);
?>
<br/><a href="http://www.izzyweb.com.br/" target="_parent">Voltar</a>