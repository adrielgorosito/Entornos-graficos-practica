# Ejercicio 1: identificar

## Variables y su tipo:
  - *$a*: es booleana
  - *$b*: es string
  - *$c*: es string
  - *$d*: es number
  - *$f*: es number


## Operadores:
  - *=*: asignacion

  - *: multiplicacion

  - *+=*: al valor inicial de la variable le suma una determinada cantidad

  - *?*: es un operador unario el cual equivale a una sentencia "if" (ej: **$a?**) (el cual pregunta si la var a es verdadera)

  -*:*: es un operador binario el cual equivale a un else (ej: **$d : $d.3**) (si la condicion anterior es verdadera, entonces se ejecuta la sentencia de la izquierda ($d), y sino se ejecuta la de la der ($d.3))


  ## Funciones y parametros:
  - *doble($i)*: tiene como parametro a i, el cual es un number, y devuelve el doble del parametro. Es una funcion definida por el usuario.

  - *echo*: esta funcion muestra en consola lo que tiene a la derecha. Es una funcion del lenguaje. Ej: echo $a (muestra en consola el valor de la var a, el cual es true)

  - *gettype()*: esta funcion obtiene el tipo de dato de la variable que le enviemos por parametro. Es propia del lenguaje. Ej: gettype($a) devuelve boolean

  - *is_string()*: determina si el parametro enviado es un string o no, devolviendo true o false. Es propia del lenguaje.

  - *is_string()*: determina si el parametro enviado es un entero o no, devolviendo true o false. Es propia del lenguaje.


 ## Estructuras de control:
  - *if (is_int($d))*: se evalua si la variable d es un entero

  - *if (is_string($a))*: se evalua si la variable a es un string

  - *$d = $a ? ++$d : $d.3*: se evalua si a es verdadero, y dependiendo de eso a d se le asigna su valor mas uno (en el caso de true) o su valor multiplicado por 3 (en el caso de false)

  ## Salida por pantalla:
  *boolean* --> echo gettype($a);
  *string* --> echo gettype($b);
  *string* --> echo gettype($c);
  *integer* --> echo gettype($d);
  *1* --> echo $a;
  *xyz* --> echo$b;
  *xyz* --> echo $c;
  *18* --> echo $d;
  *44* --> echo $f;
  *44* --> echo $g;

---

# Ejercicio 2: indicar si son equivalentes

## a-
  Si son equivalentes. Los 3 codigos tienen como salida la secuencia de numeros del 1 al 10.

## b-
  Si son equivalentes. Los 4 codigos tienen como salida la secuencia de numeros del 1 al 10.

## c-
  Si son equivalentes. Los 2 codigos tienen la misma salida.
  
---

# Ejercicio 3: explicar uso del codigo

## a-

```php
<html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;
 $col = 2;
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>";
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";
 } echo "</tr>\n";
 }
 echo "</table>\n";
?>
</body></html>
```

  Lo que muestra es una tabla de 2 columnas y 5 filas.



## b-

```php
<html>
<head><title>Documento 2</title></head>
<body>
<?php
  if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: 
  <input name="age" size="2">
  <input type="submit" name="submit" value="Ir">
 </form>
<?php
}
else {
 $age = $_POST['age'];
 if ($age >= 21) {
  echo 'Mayor de edad';
 }
 else {
  echo 'Menor de edad';
 }
}
?>
</body></html>
```
  Lo que realiza este codigo es lo siguiente. Si el boton de enviar no se acciono muestra un campo de un formulario a completar (en el cual se debe introducir la edad).

  Una vez enviado el formulario se determina si el valor ingresado es mayor o igual que 21, y de ser asi muestra que es "Mayor de edad", en caso contrario se muestra que es "Menor de edad".
