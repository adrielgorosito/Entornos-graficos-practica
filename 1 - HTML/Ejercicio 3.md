# Ejercicio 3

En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones.

---

## a)
```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
```
Link a la página de google con el texto *"Click aquí para ir a Google"*.

<br>

```html
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
```
Link a la página de google con el texto *"Click aquí para ir a Google"*. Al hacer click, se abrirá en una nueva ventana.

<br>

```html
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
```
Cómo observación, al elemento `<a>` le falta cerrarse (con `</a>`). Sin tener en cuenta esto, la diferencia con los códigos anteriores es que se agregan varios tags para brindarle información al navegador:
- `type`: indica que el url se dirige a un archivo de tipo HTML.
- `hreflang`: indica que el documento al cual se dirige está en español.
  - `charset`: indica que el documento al cual se dirige utiliza el conjunto de caracteres UTF-8.
- `rel`: indica que el enlace proporciona ayuda.

<br>

```html
<a href="#">Click aquí para ir a Google</a>
```
Debido a que no se indica ninguna dirección URL, lo único que hará será recargar la página actual.

<br>

```html
<a href="#arriba">Click aquí para volver arriba</a>
```
Al hacer click no se redireccionará hacia otra página, sino que dirigirá al usuario hacia el elemento de la pagina con `id = "arriba"`.

<br>

```html
<a name="arriba" id="arriba"></a>
```
Debido a que el hipervínculo no tiene texto, el usuario no lo podrá ver. Tampoco tiene el atributo `href` por lo que no es un hipervínculo.

<br><br>



## b)

```html
<p>
    <img src="im1.jpg" alt="imagen1" />    
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```
Muestra un párrafo, dentro del cual hay una imagen y debajo de la misma hay un hipervínculo hacia google con el texto *"Click aqui"*.

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    Click aquí
<p>
```
Es muy similar al código anterior, sin embargo, el hipervínculo no está aplicado sobre el texto *"Click aqui"* sino sobre la imagen (se redireccionará hacia Google al clickear la imagen).

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
        Click aquí
    </a>
</p>
```
También similar a los códigos anteriores, en este caso el mismo hipervínculo se aplica sobre la imagen y sobre el texto, redireccionando hacia google al clickear en cualquiera de los dos.

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```
Hay dos hipervínculos: uno sobre la imagen y otro sobre el texto. Ambos redireccionan a Google.

<br><br>



## c)

```html
<ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>
```
Muestra una lista desordenada con tres ítems: "xxx", "yyy" y "zzz".

<br>

```html
<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>
```
Muestra una lista ordenada con los mismos tres ítems. Cada ítem tiene un número asignado: en este caso "xxx" es 1, "yyy" es 2 y "zzz" es 3.

<br>

```html
<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li value="3">zzz</li>
</ol>
```
Muestra tres listas ordenadas, cada una con un único ítem: <br>
- La primera lista contiene "xxx" con el valor 1 (por defecto). <br>
- La segunda lista contiene "yyy" que se le asigna el valor 2 con el atibuto `value`. <br>
- La tercera lista contiene "zzz" que se le asigna el valor 3 con el atibuto `value`. <br>

Sin los atributos `value`, las listas se reiniciarían en cada `<ol>`. Por lo tanto, el segundo ítem tendría valor 1, al igual que el tercero.

<br>

```html
<blockquote>
    <p>
        1. xxx <br/>
        2. yyy <br/>
        3. zzz
    </p>
</blockquote>
```
Muestra un bloque de cita `<blockquote>` que contiene un párrafo con tres líneas de texto. Cada línea está separada por una etiqueta de salto de línea (`<br>`). 

<br><br>



## d)

```html
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Muestra una tabla que tiene dos columnas y tres filas. La tabla tiene un borde de tipo "1" y 300 píxeles de ancho. Cada columa tiene un encabezado ("Columna 1" y "Columna 2").

<br>

```html
<table border="1" width="300">
    <tr>
        <td>
            <div align="center">
                <strong>Columna1</strong>
            </div>
        </td>
        <td>
            <div align="center">
                <strong>Columna2</strong>
            </div>
        </td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Muestra una tabla con los mismos atributos que la anterior, a diferencia de que las columnas no tienen encabezado. La primera fila tiene un `div` con el texto centrado. Dentro tiene un texto en negrita (gracias al tag `<strong>`).

<br><br>



## e)
```html
<table width="200">
    <caption>Título</caption>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Muestra una tabla con un título ("Caption"), tres columnas y dos filas. La tabla tiene fondo gris.

<br>

```html
<table width="200">
<tr>
    <td colspan="3">
        <div align="center">Título</div>
    </td>
</tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Muestra una tabla con tres columnas y tres filas. La primera fila simula un título utilizando el atributo `colspan` con valor igual a 3 (une las tres columnas) y un `div` el cual centra el texto.

<br><br>



## f)

```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
<!-- ------------------------------------ -->
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Hay dos tablas con tres columnas y tres filas cada una. La primera fila simula un título. <br>
La primera tabla junta las celdas 2 y 3 de la primera columna con `rowspan`. <br>
La segunda tabla junta la celda 2 de las columnas 1 y 2 con `colspan`.

<br><br>



## g)

```html
<table width="200" border="1">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2"rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
<!-- ------------------------------------------------------- -->
<table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```
Muestra dos tablas de tres filas cada una. La primera fila simula un título y la tabla junta las dos celdas de la primera columna en una sola. <br>
La diferencia entre ambas tablas es meramente visual:
- La primera tabla tiene bordes separados.
- La segunda tabla tiene bordes unidos usando los atributos de tabla `cellpading = 0` y `cellspacing = 0`.

<br><br>



## h)

```html
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx" />
    <br/>
    Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
<!-- --------------------------------------- -->
<form id="form2" name="form2" action="" method="get" target="_blank">
    LOGIN <br/>
    <label>Usuario: 
        <input type="text" id="usu2" name="usu2"/>
    </label>
    <br/>
    <label>
        Clave: 
        <input type="text" id="clave2" name="clave2" />
    </label>
    <br/>
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
<!-- ------------------------------------------------------------- -->
<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu3" name="usu3" /> <br/>
        Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
    <input type="reset" id="boton3" name="boton3" value="Enviar"/>
</form>
```
Hay tres formularios:
- El primero está dentro de un bloque `<fieldset>`,  el cual tiene una leyenda y dos campos: "usuario" y "clave", ambos con atributo `value` por lo que tendrán valores predefinidos. Fuera del fieldset hay un boton de tipo "submit". El atributo `action` es "procesar.php" y el método es "post".
- El segundo no tiene bloque `<fieldset>`, pero sí una leyenda y dos campos "usuario" y "clave" (pero sin atributo `value`, por lo cual estarán vacíos). Posee un boton de tipo "submit". El atributo `action` del form está vacio y el metodo es "get".
- El tercero sí está dentro de un bloque `<fieldset>` (al igual que el primero).  Posee un botón de tipo "reset". El atributo `action` es "mailto:xx@xx.com" con método post y `enctype` igual a "text/plain".

<br><br>



## i)

```html
<label>Botón 1
    <button type="button" name="boton1" id="boton1">
        <img src="logo.jpg" alt="Botón con imagen " width="30" height="20"> 
        <br/>
        <b>CLICK AQUÍ</b>
    </button>
</label>
 <!-- --------------------- -->
<label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```
Hay dos botones. La diferencia radica en que el primero contiene una imagen dentro del botón junto a un texto en negrita y el segundo es solamente el texto (no posee imagen).

<br><br>



## j)

```html
<p>
    <label>
        <input type="radio" name="opcion" id="X" value="X" />
        X
    </label>
    <br/>
    <label>
        <input type="radio" name="opcion" id="Y" value="Y" />
        Y
    </label>
</p>
<!-- ------------------------------------------------------ -->
<p>
    <label>
        <input type="radio" name="opcion1" id="X" value="X" />
        X
    </label>
    <br/>
    <label>
        <input type="radio" name="opcion2" id="Y" value="Y" />
        Y
    </label>
</p>
```
Muestra 4 botones de tipo "radio".
- En el primer caso, "X" e "Y" están en el mismo grupo (debido a que poseen el mismo nombre como atributo). Al seleccionar uno, se quitará la selección del otro.
- En el segundo caso, "X" e "Y" están en distintos grupos. Por lo tanto, se podrán seleccionar ambos al mismo tiempo.

<br><br>



## k)

```html
<select name="lista">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
<!-- ------------------------------ -->
<select name="lista[]" multiple="multiple">
    <optgroup label=" Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label=" Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
```
Muestra dos listas:
- La primera es una lista desplegable con dos subcategorías, en la cual solo se puede elegir una opción.
- La segunda es una lista desplegable en la cual se pueden elegir multiples opciones (debido a que posee el atributo `multiple = "multiple"`).
