<?php

/**
 * 1 - Função SeculoAno($ano)
	Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
*/
	$ano = 1999;

	function seculoAno($ano)
	{
		if($ano % 100 === 0)
			return floor($ano / 100);

		else
			return floor(($ano / 100)) + 1;
	}

	echo "<h1>Ano: ".$ano."</h1>";
	echo "<h1>Século: ".seculoAno($ano)."</h1>";