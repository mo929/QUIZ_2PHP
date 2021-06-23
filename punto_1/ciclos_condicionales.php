<?php

//CICLO FOR
var valor_1 = prompt("digite su numero")
valor_1 =parseInt(valor_1)
var valor_2 = prompt("digite su numero")
valor_2 =parseInt(valor_1)

var suma = valor_1 + valor_2
var resultado = 0;

for ( var x =0; x <= suma; x ++ ){
    resultado= resultado + x
    console.log(resultado)
}



//CICLO WHILE
var contador = 10;

while(contador >= 0){
    console.log ('numeros:' + contador)
    contador--
}



//CONDICIONAL IF - ELSE IF - ELSE
var apellido = "perez",
    edad = 18;

    
if( edad== 18){
    document.write("Bienvenido, tienes 18");   
}else if(apellido == "perez") {
    document.write("Bienvenido" + apellido);
} else{
   document.write("No tienes 18 años");
}





//SWITCH

var w = 'Hola';
switch(w){

    case 'hola':
        alert ('w = 0');
        break;
        case 'Hola':
            alert ('w = 1');
            break;
            default:
            alert ('w = ?')
            break;

}


//TERNARIA


$colores_oscuros="";

$colores_oscuros = 'lindos:' .($color_claro =="?'colores_feos': $colores_feos);
echo $colores_oscuros;

?>




