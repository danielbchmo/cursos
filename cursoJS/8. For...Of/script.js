/*
    for ... of
Además del bucle for regular, hay dos versiones específicas, una de las cuales, for... of, 
está dedicada para usar con arreglos (y otras estructuras iterativas, que sin embargo 
están más allá del alcance de este curso). En un bucle de este tipo, no especificamos 
explícitamente ninguna condición ni número de iteraciones, ya que se realiza exactamente 
tantas veces como elementos haya en el arreglo indicado.

Volvamos a nuestro ejemplo de sumar los números del arreglo de cuatro elementos. 
En este ejemplo, usamos un bucle for simple:

    let values = [10, 30, 50, 100];
    let sum = 0;
    for (let i = 0; i < values.length; i++) {
        sum += values[i];
    }
    console.log(sum); // -> 190

La versión de este programa que usa el bucle for ... of se verá ligeramente diferente:

    let values = [10, 30, 50, 100];
    let sum = 0;
    for (let number of values) {
        sum += number;
    }
    console.log(sum); // -> 190

Entre corchetes después de la palabra for, no encontrarás tres campos separados por punto y coma. 
Hay una declaración de variable, seguida de la palabra of y luego un arreglo, 
cuyos elementos recorreremos (variable o literal). En nuestro ejemplo, for (let number of values) 
significa que la variable number contendrá los elementos subsiguientes del arreglo values 
en cada iteración. La sintaxis de este bucle es la siguiente:

    for (variable of arreglo) {
        bloque de código
    }

En la práctica, con mucha más frecuencia que las diferentes versiones del bucle for, 
el método forEach se usa para iterar a través de los elementos de un arreglo. 
Este es uno de los métodos array type. Su uso requiere la capacidad para escribir tus propias funciones, 
por lo que volveremos a él en la sección de funciones del curso.

Veamos un ejemplo más. Esta vez, declaramos un arreglo de ciudades, que contiene objetos que describen 
algunas de las ciudades más grandes del mundo. Cada objeto contiene los campos de nombre y población. 
Usando el bucle for... of, recorremos este arreglo y mostramos información sobre todas las ciudades que 
tienen más de 20 millones de habitantes.

    let cities = [
        { name: "New York", population: 18.65e6 },
        { name: "Cairo", population: 18.82e6 },
        { name: "Mumbai", population: 19.32e6 },
        { name: "SÃ£o Paulo", population: 20.88e6 },
        { name: "Mexico City", population: 21.34e6 },
        { name: "Shanghai", population: 23.48e6 },
        { name: "Delhi", population: 25.87e6 },
        { name: "Tokyo", population: 37.26e6 }
    ];

    for (let city of cities) {
        if (city.population > 20e6) {
            console.log(`${city.name} (${city.population})`);
        }
    }

Ejecuta el código y luego experimente con las condiciones (por ejemplo, muestra todas las ciudades 
con más de 20 millones de habitantes pero menos de 25 millones, etc.).
*/