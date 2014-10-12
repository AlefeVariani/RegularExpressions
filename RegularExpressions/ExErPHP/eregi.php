<?php

/**
* Verifica se o formato da imagem é png ou gif ou jpeg
* Utilizando a função eregi, que são insensíveis a maiúsculas e minúsculas
* Sendo que o formato pode ser image.png ou image.PNG
*/

$url = 'http://url/img/image.png';

if (eregi('(\.png)|(\.gif)|(\.jpeg)$', $a)) {
	echo 'Formato imagem válida';
} else {
	echo 'Formato imagem inválida';
}

