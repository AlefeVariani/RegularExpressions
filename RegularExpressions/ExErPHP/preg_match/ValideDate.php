<?php

/**
* Validar Datas utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
*	Esta expressão regular permite o usuario informar a data
* começando (^) com um numero (\d) quantidade e 1 ou 2 numeros ({1,2})
* seguido de um / numero (\d) quantidade e 1 ou 2 numeros, seguido de  
*  / , terminando ($) com 4 numeros (\d{4})
* 
*	Existe um 'porém' nesta validação, pois se o usuario informar a data 
* 0/13/2014 ou 10/0/2014 ela deve ser valida? ...Não, não pode ser valida por não 
* existe o mes ou dia 0, mas mesmo assim a expressão valida.
* Se alguem tiver o interrese de resolver ou ajudar. Fica a dica!! :)
*
*/

$string = "10/10/2013";

if (preg_match('/^([0-32]){1,2}\/([0-12]){1,2}\/\d{4}$/', $string)) {
	echo "Data Válida";
} else {
	echo "Data Inválida";
}