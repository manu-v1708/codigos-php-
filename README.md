Código 1:

- Este código inicializa un array llamado $VideoJuegos con cinco nombres de videojuegos.
- Luego, utiliza la función unset() para eliminar el elemento con el índice 3, 
  que corresponde a "Rocket_Leage".
- Finalmente, print_r() muestra el array resultante, donde "Rocket_Leage" ha sido eliminado.

Código 2: 

- Este código realiza varias operaciones en el array $VideoJuegos.
- Primero, agrega "Hades" al final del array.
- Luego, elimina el elemento con el índice 3 ("Rocket_Leage").
- Posteriormente busca si existe el valor de "Rocket_Leage", y si no existe 
  (en este caso si existe), lo vuelve a intentar borrar.
- Luego modifica el valor del indice 0 del array.
- Y por ultimo modifica el valor del indice 2 del array.
- Posteriormente se utiliza print_r() para mostrar el estado del array en 
  diferentes puntos del código.

Código 3: 

- Este código es casi idéntico al código 2, con una adición al final.
- Al final de el código se utiliza la función array_slice() para crear 
  un nuevo array $VideoJuegosSeleccionar que contiene los primeros dos
  elementos del array $VideoJuegos.

Código 4:

- Este código utiliza la función array_filter() para crear dos nuevos arrays
  a partir del array $numeros.
- $numerosFiltrar1 contiene los números menores o iguales a 5.
- $numerosFiltrar2 contiene los números mayores o iguales a 5.
- La función anónima (closure) dentro de array_filter() define la condición de filtrado.

Código 5:

- Este código trabaja con arrays asociativos, donde cada elemento tiene una
  clave (nombre) y un valor (edad).
- asort() ordena el array $edades por los valores (edades) de forma ascendente.
- ksort() ordena el array $edades2 por las claves (nombres) de forma alfabética ascendente.
- print_r() muestra los arrays ordenados.
