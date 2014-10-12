<?php

/**
* Verifica se o formato da imagem é png ou gif ou jpeg
*/

$url = 'http://url/img/image.png';

if (preg_match('/(\.png)|(\.gif)|(\.jpeg)$/', $a)) {
	echo 'Formato imagem válida';
} else {
	echo 'Formato imagem inválida';
}