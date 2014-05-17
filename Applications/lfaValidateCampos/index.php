<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>LFA</title>
</head>
<body>
	<div>
		<h2> Tratamento dos campos com expressões regulares: </h2>
	</div>
	<table class="table table-condensed">
<tr><td>1</td><td>Nome</td>
	<td><?php
		$nome = $_POST["nome"];
		if (empty($nome)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php 
		} else {
			if (preg_match('/^[A-Z]{1,}[a-z][^\d]{1,}$/', $nome)) { ?>
				<td class="success"> <?php echo "O nome $nome é Valido";?></td><?php
			}else{ ?>
				<td class="danger"> <?php echo "O nome $nome é Invalido";?></td><?php
			}
		}?>  
	</td>	
</tr>
<tr><td>2</td><td>CPF</td>
	<td><?php
		$cpf = $_POST["cpf"];
		if (empty($cpf)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php
		} else {
			if (preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf)) { ?>
				<td class="success"> <?php echo "O CPF $cpf é Valido";?></td><?php
			} else { ?>
				<td class="danger"> <?php echo "O CPF $cpf é Invalido";?></td><?php
			}
		}?>
	</td>
</tr>
<tr><td>3</td><td>RG</td>
	<td><?php
		$rg = $_POST["rg"];
		if (empty($rg)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php
		} else {
			if (preg_match('/^[0-9]{1}[0-9a-z]{8}$/', $rg)) { ?>
				<td class="success"> <?php echo "O RG $rg é Valido";?></td><?php
			} else { ?>
				<td class="danger"> <?php echo "O RG $rg é Invalido";?></td><?php
			}
		}?>
	</td>
</tr>
<tr><td>4</td><td>Endereço</td>
	<td><?php
		$endereco = $_POST["endereco"];
		if (empty($endereco)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php
		} else {
			if (preg_match('/^[a-zA-Z ]{1,}\ [0-9]{1,}\ [0-9a-zA-Z ]{1,}/', $endereco)) { ?>
				<td class="success"> <?php echo "O Endereço $endereco é Valido";?></td><?php
			} else { ?>
				<td class="danger"> <?php echo "O Endereço $endereco é Invalido";?></td><?php
			}
		}?>
	</td>
</tr>
<tr><td>5</td><td>Celular</td>
	<td><?php
		$celular = $_POST["celular"];
		if (empty($celular)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php
		} else {
			if (preg_match('/^\([0-9]{2}\)\ [0-9]{4}\-[0-9]{4}$/', $celular)) { ?>
				<td class="success"> <?php echo "O Celular $celular é Valido";?></td><?php
			} else { ?>
				<td class="danger"> <?php echo "O Endereço $endereco é Invalido";?></td><?php
			}
		}?>
	</td>
</tr>
<tr><td>6</td><td>Data</td>
	<td><?php 
		$data = $_POST["data"];
		if (empty($data)) { ?>
			<td class="active"> <?php echo "Campo não informado";?></td><?php
		} else {
			$dataAtual = date('d/m/Y');
			list($dia_i, $mes_i, $ano_i) = explode("/", $data); //Data Informada
			list($dia_f, $mes_f, $ano_f) = explode("/", $dataAtual); //Data Atual
			$mk_i = mktime(0, 0, 0, $mes_i, $dia_i, $ano_i); 
			$mk_f = mktime(0, 0, 0, $mes_f, $dia_f, $ano_f); 
			$diferenca = $mk_f - $mk_i; 
			
			if ($diferenca < 0 ) { ?>
				<td class="danger"> <?php echo "A data $dangerta é maior que data atual $dataAtual";?></td><?php
			} else {	
				if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $data)) { ?>
					<td class="success"> <?php echo "A data $data é Valido";?></td><?php
				} else { ?>
					<td class="danger"> <?php echo "A data $data é Invalido";?></td><?php
				}												
			}		
		}?>
	</td>
</tr>
</table>
<div>
	<button class="btn btn-primary" onclick="history.back('1')">
		<span class="glyphicon glyphicon-arrow-left"></span>
		Voltar
	</button>
</div>
</body>
</html>

