<?php
/**
* Validar UserNames utilizando a Função preg_match
* 
* @author Alefe Variani <alefevariani@unochapeco.edu.br>
*
* 	Esta expressão regular permite que o usuario informar seu UserName começando (^) ou terminando ($)
* com caracteres de a até z (a-z) maíuscula ou minúscula (i) e qualquer número que esteja no intervalo de 0 a 9 (\d), podendo
* haver os caracteres _ e -, a quantidade de caracteres é representada por {4,28} que significa
* que a string deve ter 4 caracteres no minimo e no maximo 28.    
*/

$string = "alefe_123";

if (preg_match('/^[a-z\d_-]{4,28}$/i', $string)) {
	echo "NameUser Válido!";
} else {
	echo "NameUser Inválido!";
}