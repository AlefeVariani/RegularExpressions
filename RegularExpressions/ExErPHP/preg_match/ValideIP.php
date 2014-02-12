<?php

/**
* Validar Endereços IP utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
*/

$string = "255.255.255.0";

if (preg_match('/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}
	/', $string)) 
{ 
	echo "Endereço IP Válido"; 
} else {
	echo "Endereço IP Inválido";
}
