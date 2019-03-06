<?php
	//Sumar
	function sumar($num_1,$den_1,$num_2,$den_2){
		if($den_1 == $den_2){
			$num=$num_1+$num_2;
			$simplificado=simplificar($num,$den_1);
			echo "Resultado = " . $simplificado;
		}else{
			$num=(($num_1*$den_2)+($den_1*$num_2));
			$den=($den_1*$den_2);
			
			$simplificado=simplificar($num,$den);
			echo "Resultado = " . $simplificado;
			

			}	
		}	

	//restar
	function restar($num_1,$den_1,$num_2,$den_2){
		if($den_1 == $den_2){

			$num=$num_1-$num_2;
			$simplificado=simplificar($num,$den_1);
			echo "Resultado = " . $simplificado;
		}else{
			$num=(($num_1*$den_2)-($den_1*$num_2));
			$den=($den_1*$den_2);
			$simplificado=simplificar($num,$den);
			echo "Resultado = " . $simplificado;
			}	
		}


	//multiplicar
	function multiplicar($num_1,$den_1,$num_2,$den_2){

			$num=$num_1*$num_2;
			$den=$den_1*$den_2;
			$simplificado=simplificar($num,$den);
			echo "Resultado = " . $simplificado;
			
	
		}
	

	//dividir
	function dividir($num_1,$den_1,$num_2,$den_2){

			$num=$num_1*$den_2;
			$den=$den_1*$num_2;
			$simplificado=simplificar($num,$den);
			echo "Resultado = " . $simplificado;
		}

		

	//simplificar
	function simplificar($numerador, $denominador){
		if($denominador == 1){
			return  $numerador . " / " . $denominador;
		}else{
			$b=2;

			while ($b <= $numerador){
				if($denominador % $b == 0 && $numerador % $b == 0){
					$denominador = $denominador / $b;
					$numerador = $numerador / $b;
				}else{
					$b++;
				}
			}
			return $numerador . " / " . $denominador;
		}
	}




?>