# Ejercicio 4 - Dadas las siguientes declaraciones de CSS, analizar los siguientes códigos y comparar sus efectos. Explicar:

```css
* {color:green;} 
a:link {color:gray} 
a:visited{color:blue} 
a:hover{color:fuchsia} 
a:active {color:red} 
p {font-family: arial,helvetica;font-size: 10px;color:black;}
.contenido{font-size: 14px;font-weight: bold;}
```

## a)
```html
<body>
  <p class="contenido" style="font-weight: normal;">
    Este es un texto ...............
  </p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

## b)
```html
<body class="contenido">
  <p>Este es un texto................</p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

---

## Explicación del CSS:

- `*{color:green;}`: hace que todo el texto del documento sea de color verde.
- `a:link {color:gray}`: hace que todas las etiquetas `<a>` que no hayan sido clickeadas tengan un color de letra gris.
- `a:visited{color:blue}`: hace que todas las etiquetas `<a>` que hayan sido clickeadas tengan un color de letra azul.
- `a:hover{color:fuchsia}`: hace que, cuando se pasa el cursor por encima de una etiqueta `<a>`, el color del texto del enlace cambie a fucsia.
- `a:active {color:red }`: hace que, cuando un enlace se active, se cambie el color de letra a rojo.
- `p {font-family: arial,helvetica;font-size: 10px;color:black;}`: a todas las etiquetas `<p>`:
  - Cambia la fuente a Arial (o en su defecto a Helvética).
  - Cambia el tamaño de la letra a 10 píxeles.
  - Cambia el color de la letra a negro. 
- `.contenido{font-size: 14px;font-weight: bold;}`: a todas las etiquetas de clase `class="contenido"`:
  - Cambia el tamaño de la letra a 14 píxeles.
  - Cambia el grosor de la letra a negrita.

# a)
- Primero se aplica la propiedad global `*`, haciendo que el color de letra sea verde en todos los textos del documento.
- La etiqueta `<p>` con la clase `class="contenido"`:
  - Primero se le aplica el estilo especificado a nivel de etiqueta `p`.
  - Segundo se le aplica el estilo especificado a nivel de clase `.contenido`.
  - Tercero se le aplica el estilo especificado en la etiqueta `style`. En este caso: `style="font-weight: normal;"`.
  - Entonces, el párrafo:
    - Tendrá color verde.
    - Tendrá fuente arial, un tamaño de letra de 10 píxeles y color negro (sobreescribe el color verde).
    - Se cambia el tamaño de la letra a 14 píxeles (sobreescribe los 10 píxeles) y se cambia el grosor a negrita.
    - Se cambia el grosor de la letra a normal (sobreescribe la negrita).
- Al texto: `<td>Y esta es una tabla.......</td>` solo lo afecta la propiedad global, por lo tanto, se mostrará de color verde.
- La etiqueta `<a>`:
  - Tendrá color verde.
  - Tendrá todas las propiedades de `a`:
    - El link se verá de color gris si no fue clickeado (sobreescribirá el color verde).
    - El link se verá de color azul si fue clickeado.
    - El link se verá de color fucsia cuando se pase el cursor por encima.
    - El link se verá de color rojo cuando esté activo.

# b)
- Primero se aplica la propiedad global `*`, haciendo que el color de letra sea verde en todos los textos del documento.
- El body tiene la clase `contenido`, por lo que todos los textos dentro del body:
  - Tendrán un tamaño de letra de 14 píxeles.
  - Tendrán un grosor de letra negrita.
  - Cabe aclarar que el texto seguirá siendo de color verde gracias al estilo de `*`.
- La etiqueta `<p>`:
  - Tendrá fuente Arial.
  - Se cambiará el tamaño de la letra a 10 píxeles (sobreescribiendo los 14 píxeles).
  - Se cambiará el color de la letra a negro (sobreescribiendo el color verde).
- El texto: `<td>Y esta es una tabla.......</td>`:
  - Tendrá color verde (debido a `*`).
  - Tendrá un tamaño de letra de 14 píxeles y un grosor de letra negrita (debido a la clase `contenido` de body).
- La etiqueta `<a>`:
  - Tendrá un tamaño de letra de 14 píxeles y un grosor de letra negrita (debido a la clase `contenido` de body).
  - Tendrá todas las propiedades de `a`:
    - El link se verá de color gris si no fue clickeado (sobreescribirá el color verde).
    - El link se verá de color azul si fue clickeado.
    - El link se verá de color fucsia cuando se pase el cursor por encima.
    - El link se verá de color rojo cuando esté activo.
