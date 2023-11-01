# Ejercicio 1:
## a) Completar:
Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
**mysqli_connect()**

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
**- $hostname** : es el nombre del servidor a conectarnos
**- $nombreUsuario** :  es el nombre de usuario que tiene acceso a las bases de datos
**- $contraseña** : es la contraseña de acceso para el usuario de las bases de datos

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
**mysqli_select_db**

Esta función debe pasar como parámetro 
**- $nombreConexion** : este valor se obtiene de la devolucion de la funcion `mysqli_conect()`
**- $nombreBD** : es el nombre de la base de datos a la que queremos conectarnos

La función mysqli_query () se utiliza para 
**ejecutar una consulta a la base de datos conectada**
y requiere como parámetros
**- $nombreConexion** : este valor se obtiene de la devolucion de la funcion `mysqli_conect()`
**- $query** : esta variable contiene la consulta a realizar en la base de datos, es de tipo String

La cláusula or die() se utiliza para 
**sirve para capturar un error, y recibe como parametro el mensaje de error a mostrar, ej:**
`$nomConexion = mysqli_connect($nomHost, $nomUser) or die("Hubo un problema con la coneccion a la BD");`
y la función mysqli_error () se puede usar para
**devuelve el ultimo error ocurrido en una funcion MySQLi, y recibe como parametro la variable $nombreConexion**


## b) Explicar el código

1. `while ($fila = mysqli_fetch_array($vResultado)){` : En esta linea se inicia una sentencia While, la cual tiene como condicion lo siguiente:
    - `$fila = mysqli_fetch_array($vResultado)`: se le asigna a *$fila* un array que contiene el resultado de la query enviada a la BD (el cual se almacena en *$vResultado*), o se le asigna *null* en caso de que no haya devuleto nada la query.
    - entonces mientras se pueda seguir recorriendo el array se ejecuta lo que está dentro del while.

2. Dentro del `while{}` muestra una fila, la cual tiene 3 columnas, en las que se muestran los 3 primeros atributos del resultado de la query .

3. Con `<td colspan="5">`: se obtiene una division entre las filas.

4. Una vez finalizado la sentencia `while{}` se usa la sentencia `mysqli_free_result($vResultado);` la cual es usada para liberar la memoria, eliminando el objeto *$vResultado* de la misma.

5. Por ultimo se utiliza la sentencia `mysqli_close($link);` la cual cierra la conexion a la base de datos.
