<?php

/**
*
* Ex simples usando a funcao ereg
*
* @author Alefe Variani <alefevariani@unochapeco.edu.br> 
*
*	Existe as funções eregi e eregi_replace, que tem como
* diferencia que elas são insensíveis a maiúsculas e minúsculas
* (case insensitive)
*
*/

$string = "abc";
$stringFim = ereg("abc", $string);

if ($stringFim) {
	echo "True";
} else {
	echo "False";
}