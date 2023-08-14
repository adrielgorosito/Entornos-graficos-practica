# Ejercicio 2

*HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos ). Cada tag puede tener atributos(proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un scriptque se ejecuta cuando el evento ocurre).*
 
Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos(nombre y valor), aclarando si es obligatorio.

---

## a)
```html
<!-- Código controlado el día 12/08/2009 -->
```
Es utilizado para realizar un comentario de una o varias líneas. <br>
`<!--` es utilizado para abrir el comentario, se escribe el comentario y se cierra con `-->`. <br>
Puede ubicarse en cualquier lugar del documento HTML ya que no tiene ningun efecto en el sitio, es solamente una nota para el programador. 

<br>

## b) 
```html
<div id="bloque1">Contenido del bloque1</div>
```
En este extracto se declara un `<div>`, es decir una division en el HTML. <br>
Esta división contiene el texto *"Contenido del bloque1"*. Cabe aclarar que el texto en sí no es obligatorio y un `<div>` puede contener a otros elementos HTML. Además, tiene un id *"bloque1"* el cual no es extrictamente necesario pero puede que sea utilizado para agregar estilos a este elemento usando CSS. <br>
Este tag debe ser usado dentro del elemento `<body>`.

<br>

## c)
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32"longdesc="detalles.htm" />
```
La etiqueta `<img/>` es utlizada para colocar una imagen, se coloca dentro del `<body>` y tiene varios atributos:
- `src`: es necesario para indicar el url de la imagen a mostrar.
- `alt`: su valor es *"lugar imagen"* y se usa para mostrar un texto alternativo cuando no carga la imagen. No es obligatorio pero es buena practica para mejorar la accesibilidad.
- `id`: su valor es *"im1"* y no es obligatorio.
- `name`: su valor es *"im1"* y no es obligatorio.
- `width`: su valor es *"32"* e indica el ancho de la imagen. No es obligatorio.
- `height`: su valor es *"32"* e indica la altura de la imagen. No es obligatorio.
- `longdesc`: su valor es *"detalles.htm"* e indica la dirección a una descripción más detallada. No es obligatorio y actualmente está obsoleto.

<br>

## d) 
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```
La etiqueta `<meta>` es una etiqueta ulizada para aportar información (metadatos) sobre el documento. Se coloca dentro de `<head>`. Se pueden ver los siguientes atributos:
- `lang`: su valor es *"es"* e indica el lenguaje. Es opcional.
- `name`: su valor es *"keywords"* e indica el nombre del metadato. Se puede omitir si el metadato que queremos indicar ya tiene un atributo (ejemplo: `lang`), de lo contrario, es obligatorio.
- `content`: sus valores son *"casa, compra, venta, alquiler"* y *"16-Sep-2019 7:49 PM"* e indica el valor de un metadato específico. Dependiendo del metadato, puede ser obligatorio o no.
- `http-equiv`: su valor es *"expires"* e indica una "directiva pragma", es decir, una indicacion para el intérptrete de HTML. Es opcional.

<br>

## e)
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>
```
La etiqueta `<a>`(anchor) indica un hipervínculo y se utiliza en del `<body>`. Tiene los siguientes atributos:
- `href`: su valor es *"http://www.e-style.com.ar/resumen.html"* e indica la url a la que redirige el hipervínculo. Es obligatorio.
- `type`: su valor es *"text/html"* e indica el tipo de contenido al que apunta la url. Es opcional.
- `hreflang`: su valor es *"es"* e indica en qué idioma está el contenido de la url. Es opcional.
- `charset`: su valor es *"utf-8"* e indica el codificado de caracteres del contenido de la url. Es opcional.
- `rel`: su valor es *"help"* e indica la relación entre la página actual y la página del url. Es opcional.

<br>

## f)
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

La etiqueta `<table>` muestra una tabla. Se utiliza en el `<body>` y tiene los siguientes atributos:
- `width`: su valor es *"200"* e indica el ancho de la tabla.
- `summary`: su valor es *"Datos correspondientes al ejercicio vencido"* e indica un resumen de la tabla. Es opcional.

La etiqueta `<caption>` brinda un título para la tabla. Se usa dentro de `<table>` (y por lo tanto, dentro de `<body>`). Tiene un atributo:
- `align`: su valor es *"top"* e indica que el título irá en la parte superior de la tabla. Es opcional.

La etiqueta `<tr>` define una fila dentro de una tabla. No tiene atributos.

La etiqueta `<th>` define las celdas del encabezado y la etiqueta `<td>` define las celdas de los datos. Ambas etiquetas deben utilizarse dentro de `<tr>`. Tiene un solo atributo:
- `scope`: indica con qué otras celdas está relacionada una celda. Por ejemplo, cuando su valor es *"col"* (en el primer `<th>`), indica que esa celda es el encabezado de la columna.
