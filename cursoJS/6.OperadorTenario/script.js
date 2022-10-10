/* OPERADOR TERNARIO (If ternario)
Se utiliza cuando una condición será true o false, al igual que el if.
Su ejecución puede tener una o varias sentencias, en este caso irán separadas por comas
y entre parentesis.

    (condicion) ? true : false;
    ---Varias condiciones---
    (condicion) ? 
        (primera sentencia, segunda sentencias, ...)
    : (primera sentencia, segunda sentencia, ...);
*/

let num = 3;

//PARES
(num %2 == 0) ? console.log(`${num} es par`) : console.log(`${num} es impar`);
//Muchas sentencias, el acomodo es para notar las separaciones
(num %2 == 0) ? 
(
    
    console.log(`${num} es par`), 
    console.log(`${num} es par 2`)
)
    : 
(
    console.log(`${num} es impar`),
    console.log(`${num} es impar 2`)
)   ;