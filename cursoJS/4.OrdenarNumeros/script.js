/* 
Ordena numero de 3 números de mayor a menor
Permutaciones con 3 elementos
Posibilidades de 3! = 3*2*1 = 6
*/


/* CONST
Variables defined with const cannot be Redeclared.

Variables defined with const cannot be Reassigned.

Variables defined with const have Block Scope. 
*/
const num = document.getElementById('num');
const resultado = document.getElementById('resultado');

/* PROMPT
The prompt() method displays a dialog box that prompts the user for input.
The prompt() method returns the input value if the user clicks "OK", otherwise it returns null.
*/
let a=prompt('Introduzca el primer numero');
let b=prompt('Introduzca el segundo numero');
let c=prompt('Introduzaca el tercer numero');

//Imprimir en una caja de texto
num.textContent = `Los numeros introducidos son ${a}, ${b}, ${c}`;

//EJERCICIO

if(a>=b && a>=c){
    if(b>c){
        resultado.textContent = `El orden es ${a}, ${b}, ${c}`;
    }else{
        
        resultado.textContent = `El orden es ${a}, ${c}, ${b}`;
    }
}else if(b>=a && b>=c){
    if(a>c){
        resultado.textContent = `El orden es ${b}, ${a}, ${c}`;
    }else{
        resultado.textContent = `El orden es ${b}, ${c}, ${a}`;
    }
}else if(c>=a && c>=b){
    if(a>b){
        resultado.textContent = `El orden es ${c}, ${a}, ${b}`;
    }else{
        resultado.textContent = `El orden es ${c}, ${b}, ${a}`;
    }
}
