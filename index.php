<?php

/*
	Exemplo simples de uso
*/

include_once "controller/CaptchaController.php";

$cc = new CaptchaController();
$cc->displayAction();

// Para escutar o captcha
// $cc->audioPlayAction();

?>