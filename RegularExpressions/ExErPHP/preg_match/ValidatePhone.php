<?php
/**
* Validar Números telefônicos utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
*
*	Deve começar (^) com ( seguido de 2 ou 3 numeros de 0 a 9 
* ([0-9]{2,3}\), espaço, seguido de 4 numeros ([0-9]{4}) 
* - para terminar ($) seguido de 4 numeros ([0-9]{4})
*
*/

$string = "(014) 3236_3810";

if (preg_match('/^\([0-9]{2,3}\) [0-9]{4}-[0-9]{4}$/', $string)) {
	echo "Phone Válido";exit;
} else {
	echo "Phone Inválido";exit;
}
