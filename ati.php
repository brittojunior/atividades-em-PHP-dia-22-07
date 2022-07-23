<?PHP

/*
Crie os algoritmos abaixo e depois poste os arquivos php na atividade.
A atividade conta como presença na aula de hoje.
1 - Crie um algoritmo que guarde em uma variável um valor e verifique se esse valor é positivo, negativo ou igual a zero. Mostre na tela se o valor informado é "Valor positivo", "Valor Negativo" ou "Igual a zero".
*/
$val = 0; 
$resultado = "";

if($val > 0){
  $resultado = "Valor Positivo";
}elseif($val < 0){
  $resultado = "Valor Negativo";
}else{
  $resultado = "Igual a Zero";
}

echo $resultado;









/*

2- Crie um algoritmo que leia um valor de uma variável e exiba a tabuada de 0 a 10 de acordo com o numero informado na variável. Exemplo $variavel = 5    Saída 5 x 0 = 0 ; 5 x 1 = 5 ; 5 x 2 = 10......

*/

for($contador = 1;$contador <= 10; $contador++){
    
    $calc = $contador * 5;
echo " 5 x ". $contador ." = ".$calc."\n";
}



/*
3 - Crie um algoritmo que leia o valor de uma variável e informe se o número é par ou ímpar.
*/
$numero = 1;

if ( $numero & 1 ) {
  echo "$numero é impar!";
} else {
  echo "$numero é par!";
}

/*
4 - Crie um algoritmo que armazene na variável um número inteiro de 1 a 12 e escreva o mês correspondente. Caso o número seja fora desse intervalo, informe que não existe um mês que corresponda ao valor informado.
*/
$mes = [
    "Janeiro", "Fevereiro",
    "Março", "Abril",
    "Maio", "Junho",
    "Julho", "Agosto",
    "Setembro", "Outubro",
    "Novembro", "Dezembro"];
  
    $numMes = 8;
  
    if($numMes >=1 && $numMes <=12){
      echo $mes[$numMes - 1];
    }else{
      echo "Mês inválido";
    }




?>