<?php

/**
* Validar Cep utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
* 	Deve comecar com 4 numeros ^(\d){4}, seguido de - ou espaço, 
* ocorrendo uma vez ou nenhuma [- ]?, 
* e o fim deve ter 3 numeros (\d){3}$
*
*/

$er = "/^(\d){4}[- ]?(\d){3}$/";
$string = "888 400";

if(preg_match($er, $string)){
	echo 'CEP Válido';
} else {
	echo 'CEP Inválido';
}