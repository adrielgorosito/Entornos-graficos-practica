# Ejercicio 1: indicar si son equivalentes los codigos

  Si son equivalentes. Se puede comprobar al ejecutar lo siguiente:

```php
echo $a['color'];
echo $a['sabor'];
echo $a['forma'];
echo $a['nombre'];
```

  Se obtiene la misma salida porque en ambos casos se declara un array de 4 unidades, y los indices de referencia son:
    - color
    - sabor
    - forma
    - nombre

---

# Ejercicio 2: Indicar las salidas

## a:
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```

  - Con el primer echo se obtiene el strting *bar*
  - Y con el segundo echo se obtiene el numero *1* que corresponde al valor logico de TRUE

  - Por ende la salida es *bar1*


## b:
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
  La salida es *5942*


## c:
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?> 
```
  No se podria obtener ninguna salida, porque con la sentencia *unset($matriz[5]);* se quita la posicion 5 del array (la cual contiene el valor 1) y con la sentencia *unset($matriz);* se elimina todo el array.

---

# Ejercicio 3: Indicar las salidas

## a:
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
  La salida es un mensaje que te dice en que momento entraste a la pagina, aclarando hora, minutos, segundos y fecha.


## b:
```php
<?php
function sumar($sumando1,$sumando2){
 $suma=$sumando1+$sumando2;
 echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
  La salida es *5+6=11*

---

# Ejercicio 4: Analisis del codigo

```php
<?php
function comprobar_nombre_usuario($nombreUsuario) {
  if (strlen($nombreUsuario)<3 || strlen($nombreUsuario)>20){
      echo $nombreUsuario . " no es válido<br>";
      return false;
  }
  $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
  for ($i=0; $i<strlen($nombreUsuario); $i++){
      if (strpos($permitidos, substr($nombreUsuario,$i,1))===false){
          echo $nombreUsuario . " no es válido<br>";
          return false;
      }
  }
  echo $nombreUsuario . " es válido<br>";
  return true;
}

comprobar_nombre_usuario("Adriel"); // Llamado a la función

?>
```
  Dentro de la funcion *comprobar_nombre_usuario();* se realiza lo siguiente:
    - Se comprueba que el nombre enviado por parametro tenga un tamañano entre 3 y 20
    - Despues se analiza que los caracteres del nombre sean alfanumericos y/o guiones medio y bajo
    - Por ultimo devuelve un mensaje indicando si el nombre es valido o no

  Con la sentencia *comprobar_nombre_usuario("Adriel");* se llama al metodo enviando como parámetro el nombre **Adriel**.
