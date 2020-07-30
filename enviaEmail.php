<?php
/**
 * @Author: Eduardo Palandrani (edupalandrani@gmail.com) - 2019-04-20
 * Precisa instalar 5 coisas pelo Composer pra rodar 100%, segue os comandos:
 * 1 - composer require phpmailer/phpmailer
 * 2 - composer require league/oauth2-google
 * 3 - composer require hayageek/oauth2-yahoo
 * 4 - composer require stevenmaguire/oauth2-microsoft
 * 5 - composer require symfony/polyfill-mbstring
 */

# Para funcionar 100% é necessário configurar os dados de acesso ao seu provedor na função
# "getDadosMail()", feito isso, basta executar esse Script pelo Terminal com PHP

/**
 * Script criado por Eduardo Palandrani (@eduteu) 
 * para disparar E-mails atráves de provedor SMTP pessoal
 * direto do Terminal de Comando com PHP
 * 
 * Os créditos devem sempre permanecer!
 * contato: edupalandrani@gmail.com 
 */ 

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


fazTudo(); # Função que executa todo o processo.

function fazTudo(){
	if(isset($_SERVER["REMOTE_ADDR"]) && $_SERVER["REMOTE_ADDR"] == '::1'){ # Valida se está sendo acessado pelo Navegador
		echo "Script feito para rodar no Terminal";
		exit;
	}
	echo "Bem vindo(a) ao envio de E-mails de Eduardo Palandrani. \r\n";
	echo "DICA: Dê um duplo 'espaço' para pular Linhas no e-mail! \r\n";
	$Para = getEmail(0); # O Usuário passa o e-mail de quem precisa enviar
	$ParaNome = readline("Qual o Nome de quem deseja enviar? \r\n"); # Nome de quem vai enviar
	$Assunto = readline("Qual o Assunto do E-mail? \r\n"); # Assunto do E-mail
	$Texto = readline("Qual o Texto do E-mail? \r\n"); # Texto do E-mail
	$certeza = readline("Quer mesmo enviar o E-mail '".$Assunto."' para '".$Para."' (Y/N) \r\n"); # Confirmação (aceita de varias formas)
	$ok = array('Y', 'y', 'sim', 'Sim', 'SIM', 'Yes', 'yes', 'S', 's'); # Array com todas as formas de Sim possíveis para confirmar o envio do E-mail
	if(!in_array($certeza, $ok)){ # Caso o usuário não disse que pode enviar, o envio é cancelado.
		echo "OK, cancelado! \r\n";
		exit;
	}
	echo "Processando... \r\n";
	
	$Texto = str_replace("  ", "<br>", $Texto); # Quebra linha com a tag <br> do HTML quando tiver espaços duplos no texto.
	echo sendMail($Para, $ParaNome, $Assunto, $Texto); # chama a função que envia o e-mail ao provedor e da um echo no retorno.
}

function getEmail($n = 0){ # Função que recebe o e-mail em que o usuário deseja enviar e já faz uma validação simples.
	if($n >= 5){ # Se errou mais de 5 vezes o e-mail finaliza o Script
		echo "Ops, você errou o e-mail muitas vezes, tente mais tarde!";
		exit;
	}
	$Para = readline(($n > 0?"(".($n+1).") E-mail, inválido... ":"")."Qual o E-mail de quem deseja enviar? \r\n");
	if(!filter_var($Para, FILTER_VALIDATE_EMAIL)){
		$Para = getEmail($n+1);
	}
	return $Para;
}

function sendMail($toMail, $toName, $subJect, $msgMail, $tipeMail = 'PHPMailer'){ # Função que envia o e-mail para o provedor
	$confMail = getDadosMail($tipeMail); # Pega os dados de acesso do seu Provedor (Configue na função)
	$mail = new PHPMailer; 
	$mail->SetLanguage("br");
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP(); 
	$mail->SMTPDebug = 0;
	$mail->Host = $confMail['smtpHost'];
	$mail->Port = $confMail['smtpPort'];
	$mail->SMTPSecure = $confMail['smtpSecure'];
	$mail->SMTPAuth = $confMail['smtpAuth'];
	$mail->Username = $confMail['loginEmail']; 
	$mail->Password = $confMail['loginSenha']; 
	$mail->setFrom($confMail['loginEmail'], $confMail['loginNome']); 
	$mail->addAddress($toMail, $toName);
	$mail->addReplyTo($confMail['loginEmail'], $confMail['loginNome']); 
	$mail->Subject = $subJect;
	$mail->msgHTML($msgMail);
	$mail->AltBody = $msgMail;
	if (!$mail->send()){
	    $rets = "Erro ao disparar o pedido de Envio para seu Provedor, erros detectados: " . $mail->ErrorInfo;
	}else{
	     $rets = "Perfeito, disparamos o pedido de envio para seu Provedor!";   	
	}	
	return $rets;
}

function getDadosMail($tipeMail){ # Coloque nessa função os dados de acesso ao seu provedor.
	$dados = array();
	if($tipeMail == 'PHPMailer'){
		$dados['loginEmail'] = 'SEU_EMAIL';
		$dados['loginSenha'] = 'SUA_SENHA';
		$dados['loginNome']  = 'SEU_NOME';
		$dados['smtpHost']   = 'LINK_DO_SEU_SMTP';
		$dados['smtpPort']  = 'PORTA_DO_SEU_SMTP'; # Geralmente '587'
		$dados['smtpSecure']  = 'SEGURANCA_DO_SEU_SMTP'; # Geralmente 'tls'
		$dados['smtpAuth'] = true;
	}
	return $dados;
}