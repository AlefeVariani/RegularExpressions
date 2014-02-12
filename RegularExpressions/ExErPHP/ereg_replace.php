<?php

/**
* Ex simples usando ereg_replace 
*
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
* 
*
*/

$numero = '10';
$string = "Entra o camisa dez do Time kkk";

$stringFim = ereg_replace('dez', $numero, $string);

if (!$stringFim) {
	echo $stringFim;
} else {
	echo 'Não exite a palavra na frase :-/';
}
