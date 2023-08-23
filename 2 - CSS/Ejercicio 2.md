# Ejercicio 2: Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
p#normal {
  font-family: arial,helvetica;
  font-size: 11px;
  font-weight: bold;
}

*#destacado {
  border-style: solid;
  border-color: blue;
  border-width: 2px;
}

#distinto {
  background-color: #9EC7EB;
  color: red;
}
```

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>
```

---

Analizando parte por parte:

```css
p#normal {
    font-family: arial, helvetica;
    font-size: 11px;
    font-weight: bold;
}
```

Este código CSS se aplica a cualquier etiqueta `<p>` con `id="normal"`. En este caso, se aplica a:

```html
<p id="normal">Este es un párrafo</p>
```

El CSS modifica:
- Fuente Arial (y si no se le pude aplicar esa fuente se aplica Helvética).
- Tamaño de letra de 11 píxeles.
- Texto en negrita.

<br><br>

```css
*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}
```

Este código CSS se aplica a todas las etiquetas que tienen `id="destacado"` que en este caso son una etiqueta `<p>` y una etiqueta `<table>`.

```html
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
```

El CSS modifica:
- Borde sólido.
- Borde de color azul.
- Ancho del borde de dos píxeles.

<br><br>

```css
#distinto {
    background-color: #9EC7EB;
    color: red;
}
```

Este código se aplica a cualquier elemento con `id="distinto"`.

```html
<p id="distinto">Este es el último párrafo</p>
```

El CSS modifica:
- Color de letra rojo.
- Color de fondo de #9EC7EB (está en hexadecimal, es una especie de celeste).
