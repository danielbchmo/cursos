//STRING

let cadena = "Hola Mundo";

/* PROPIEDADES
lenght -> devuelve la longitud de la cadena
*/

console.log("Tamaño de la cadena: ",cadena.length);

/* METODOS
Todos los metodos devuelven una cadena nueva, la cadena original
no será modificada.

toUpperCase() -> Devuelve la cadena a mayusculas.
*/

console.log("Cadena original: ", cadena);
console.log("A mayusculas: ", cadena.toUpperCase());

/* toLowerCase() -> Minusculas */

console.log("Minusculas: ", cadena.toLocaleLowerCase());

/* indexOf(string) ->Devuelve   la posición en la que se encuentra el
string , si no lo encuentra devuelve -1
*/

console.log("Posición de Mundo: ",cadena.indexOf('Mundo'));

/* replace(valor a buscar, valor nuevo) -> reemplaza el fragmento de
la cadena que le digamos y pone el valor nuevo
*/

console.log("Reemplazo de valores: ",cadena.replace('Mundo','Youtube'));

/* substring(inicio [,fin]) -> Extrae los caracteres desde inicio
hasta fin (el final no incluye)
*/

console.log("Extraccion desde puntos especificos(Un parametro): ",cadena.substring(3));
console.log("Extraccion desde puntos especificos(Dos parametros): ",cadena.substring(3,9));

/* slice(inicio [,fin]) -> igual que substring pero admite valores negativos
*/

console.log("Extracción pero de los ultimos valores hacia el inicio: ",cadena.slice(-3));

/* trim() -> Elimina los espacios al inicio y al final de la cadena
 */

let cadena2 = 'Estamos trabajando                        con cadenas';
console.log(cadena2);
console.log("Eliminar espacios: ",cadena2.trim());

/* --ES6--

startsWith(valor [,inicio]) -> Funciona para saber si la cadena    
comienza con ese valor. Devuelve true o false.
*/

console.log("Comienza con la palabra H: ",cadena.startsWith('H'));
console.log("Comienza con la palabra h: ",cadena.startsWith('h'));
console.log("Comienza con la palabra M desde la posición 5: ",cadena.startsWith('M',5));

/* 
ednsWith(valor [,longitud]) -> Funciona para saber si la cadena    
termina con ese valor. Devuelve true o false.
*/

console.log("Termina con o: ",cadena.endsWith('o'));
console.log("Termina con a en los 3 primeros caracteres: ",cadena.endsWith('a',4));
console.log("Termina con Mundo: ",cadena.endsWith('Mundo'));

/* include(valor [,incicio]) -> igual que indexOf pero devuelve true o false
 */

console.log("Buscar el valor n: ",cadena.includes('n'));
console.log("Buscar el valor n desde la posicion 5: ",cadena.includes('n',5));

/*repeat(valor) -> Repite el string las veces que se indique
*/
 
let cadena3 = 'Hola';
console.log(cadena3.repeat(3));

/* TEMPLATE STRING */

let nombre = 'Juan';
let apellido = "Gomez";
let edad = 20;

//Forma larga: console.log('Hola ' + nombre + " " + apellido + ". Tienes " + edad + " años. ");
//Forma correcta con Templates:
console.log(`Hola ${nombre} ${apellido}. Tienes ${edad} años.`);//colocar con acento grave ``
console.log(`El año que viene tendrás ${edad+1}.`);

let x = 180; 
{
    let x1 = 200;
    x = x + 10;
}
console.log(x); 