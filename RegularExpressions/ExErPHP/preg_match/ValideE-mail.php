<?php
/**
* Validar E-mail utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
*	Esta expressão regular permite o usuario informar seu E-mail
* comecando (^) não tendo numeros de 0 a 9 ([^0-9]) e comecando sim com
* qualquer numeros, letra, _ e - ([^0-9][a-zA-Z0-9_-]) uma ou mais vezes (+),
* podendo haver letras, numeros e . uma ou mais vezes ([.][a-zA-Z0-9_]+),
* logo depois como deve aparecer @ seguido de uma quantidade e letras e numeros
* ([.][a-zA-Z0-9_]+),para terminar($) . e letra ou numeros na quantia de 2 a 4 [.][a-zA-Z]{2,4}
* 
*
*/

$string = "alefevariani@unochapeco.edu.br";

if 
(preg_match('/^[^0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
$string)) {
    echo "E-mail Válido";
} else {
	echo "E-mail Inválido";
}

/*
* Calo que existe formas de incurta a expressão para maior entendimento
* Como por exemplo no Artigo do Rafael Jaques sobre expressões regulares ele faz
* uma validação de E-mail muito mais Simples de ser compreendido. ()
* Usando a função ereg, que pertence do proprio PHP:
*
* $email = 'mario@gmail.com';
* $padrao = "^(.+)@(.+).(.+)$";
* 
* if (ereg($padrao,$mail)) {
*    print 'Seu email passou na validacao';
* }
* else {
*    print 'Seu email nao passou na validacao';
* }
*
*/

