/* ARRAY
- Son estruturas que nos permiten almacenar varios datos y agruparlos.
- Se pueden llenar con cualquier tipo de datos válido en JS y deben ir
separados por comas.
- Se pueden mezclar tipos de datos, pero no es recomendable.
- Se declaran con llaves cuadradas o corchettes [].
- Pueden añadirse o eliminarse elementos en el momento que queramos.

    let array = [];
    let numeros = [1,2,3,4,5];
*/

let num = [1,2,3,4,5];
// let palabras = ['hola','estamos','en','casa'];

// console.log(num[1]);//Devolver un valor exacto segun su pocision
// console.log(palabras[3]);
// console.log(num);

/*
ARRAY - Propiedad
    .length - devuelve el número de posiciones que contiene el array
 */

/*
ARRAY - Métodos
    array.isArray(variable a evaluar) - devuelve true si la variable es array.
 */
// let number = 4;
// console.log(Array.isArray(number));//no es un array
// console.log(Array.isArray(num));//Es array

/*
    Eliminar un elemento
        .shift() - elimina el primer elemento del array y devuelve ese elemento
        .pop() - elimina el ultimo elemento de un array y devuelve ese elemento.
 */
// console.log(num);
// num.shift();
// console.log(num);
// num.pop();
// console.log(num);

/*
    Añadir elementos
        .push(elem1, elem2, ...) - añade un elemento o más al final del array.
        .unshift(elem1, elem2, ...) - añade un elemento o más al incicio del array.
 */
// num.push(11,22);
// console.log(num);
// num.unshift(11,22);
// console.log(num);

/* 
    .indexOf() - devuelve el primer indice del elemento que conincida con el
    valor especificado, o -1 si ninguno es encontrado. 
    .lastIndexOf() - devuelve el ultimo
 */
// console.log(num.indexOf(4));
// console.log(num.lastIndexOf(5));

/*
    .reverse() - invierte el orden de los elementos array
*/
console.log(num);
num.reverse();
console.log(num); 

/* 
    .join(separador) - Devuelve un string con el separador que indiquemos,
    por defecto "comas" .
*/


/*
    .splice(a,b,item) - cambia el contenido de un array eliminando elementos
    existentes y/o agregando nuevos elementos.
        a - indice de inicio
        b - numero de elementos
        items - Elementos a añadir en el caso de que se añadan
*/