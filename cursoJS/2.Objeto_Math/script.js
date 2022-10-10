/**
Objeto Math

Objeto estatico. Tenemos que usar su nombre para utilizarlo

PROPIEDADES:
    Math.E - Math.Pi
METODOS:
    Math.abs(x) Devuelve el valor absoluto de x
    Math.ceil(x) Devuelve el entero más pequeño mayor o igual que un número
    Math.floor(x) Devuelve el entero más grande menor o igual que un numero
    Math.pow(x, y) Devuelve la potencia de x elevado a y
    Math.random() Genera un numero pseudoaleatorio entre 0 y 1
    Math.round(x) Devuelve el valor de un numero redondeado al entero mpas cercano
    Math.sign(x) Devuelve el signo de la x, que indica si x es positivo, negativo o cero
 */

console.log(Math.E);
console.log(Math.PI);

let num = 5.3;

console.log("ABS",Math.abs(num));
console.log("CEIL",Math.ceil(num));
console.log("FLOOR",Math.floor(num));
console.log("POW",Math.pow(num, 3));
console.log("RANDOM",Math.random());
console.log("ROUND",Math.round(num));
console.log("SIGN",Math.sign(num));