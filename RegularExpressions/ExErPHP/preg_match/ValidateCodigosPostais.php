<?php
/**
* Validar Códigos Postais utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
*	Esta expressão regular permite o usuario informar seu Código Postal
* comecando (^) com numeros de 0 a 9 ([0-9]) na quantidade de 5 numeros({5,5}),	
* e podendo tem um ocorrencia ou não (?) do caracteres - e espaço ([- ]) e 
* para terminar ($) ele pode ou não (?) informar numeros de 0 a 9 ([0-9]) na 
* quantia de 4 numeros ({4,4})
*
*/

$string = "55325-4324";

if (preg_match('/^[0-9]{5,5}([- ]?[0-9]{4,4})?$/', $string)) {
	echo "Códigos Postais Válido";    
} else {
	echo "Códigos Postais Inválido";
}


