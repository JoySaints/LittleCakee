<?php

	$numb1 = filter_input (INPUT_POST, "Numero1");
	$numb2 = filter_input (INPUT_POST, "Numero2");
	$ope = filter_input (INPUT_POST, "operacao");
	$resul = " ";

	if($numb1 && $numb2){
		switch($ope){
			case "+":
				$resul = ($numb1 + $numb2);
			break;
			case "-":
				$resul = ($numb1 - $numb2);
			break;
			case "*":
				$resul = ($numb1 * $numb2);
			break;
			case "/":
				$resul = ($numb1 / $numb2);
			break;
		}
	}

?>

	<!DOCTYPE html>
	<html lang = "en" dir = "ltr">
	   <head>
	   	 <meta charset="utf-8">
	   	 <title><strong>Operações</strong></title>
	   	 <style>
	   	 	input, select{padding: 10px; margin: 5px; }
	   	 </style>
	   </head>
	   <body>
	     <h1><?=$resul;?></h1>
	     <form method="post">
	       <label>Número 1: <input type="text" name ="Numero1"/></label><br>	 
	       <label>Número 2: <input type="text" name ="Numero2"/></label><br>
	       <label>Operação: 
	       	 <select name = "operacao">
	       	 	<option value="+">Adição</option>
	       	 	<option value="-">Subtração</option>
	       	 	<option value="*">Multiplicação</option>
	       	 	<option value="/">Divisão</option>
	       	 </select>
	       </label><br>
	       <input type="submit" name="btnCalcular" value="Calcular">
	     </form>
	   </body>
	</html>
