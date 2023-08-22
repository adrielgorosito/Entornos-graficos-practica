# Ejercicio 1: Responder 

## 1. Qué es CSS y para qué se usa?

CSS (Cascading Style Sheets) es un lenguaje de hojas de estilo utilizado para definir la presentación visual de un documento HTML. En otras palabras, se utiliza para dar estilo a la apariencia de una página web.
Además, el CSS también ayuda a mejorar la accesibilidad web y la experiencia del usuario, ya que permite controlar cómo se presentan los elementos visuales en diferentes dispositivos y tamaños de pantalla.


## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 
Las reglas de declaración de estilo se componen de dos partes principales:
- *selector*: sirve para identificar el o los elementos HTML a los que se le aplicacará el estilo.
- *declaracion*: se compone de una o varias propiedades y sus valores correspondientes. Las propiedades son los aspectos visuales que se desean cambiar, como el color de fondo, el tamaño de fuente, la fuente y la altura de línea.

La sintaxis es la siguiente:

```html
<selector> {
    <declaracion>
}
```

## 3. Cuáles son las tres formas de dar estilo a un documento? 
- CSS interno: se define dentro de la etiqueta `<style>` de una página.
- CSS externo: en el HTML se debe incluir una referencia al archivo de hoja de estilos dentro del elemento `<link>`.
- CSS en linea: se utiliza para aplicar estilo a un solo elemento. Los estilos en linea se definen dentro del atributo `style` del elemento en cuestion.

## 4. Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno. 
Selector de elementos:
```css
h1 {
    color: red;
}
```

Selector de clase:
```css
.clase { 
    color: blue;
}
```

Selector de id:
```css
#id {
    color: yellow;
}
```

Selector universal:
```css
* {
    color: green;
}
```

## 5. Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
Una pseudoclase es una palabra clave que se añade a los selectores y sirve para especificar un estado especial del elemento seleccionado. Las más utilizadas aplicadas a vinculos son `:link` y `:visit`.
- `:link` se utiliza para seleccionar enlaces que aún no han sido visitados por el usuario, es decir, enlaces que el usuario aún no ha hecho clic en ellos.
- `:visited` se utiliza para seleccionar enlaces que ya han sido clickeados por el usuario, es decir, enlaces que el usuario ya ha hecho clic en ellos.

## 6. Qué es la herencia? 
La herencia en CSS es un mecanismo mediante el cual las propiedades de estilo aplicadas a un elemento se transmiten a sus elementos hijos. Esto significa que, si se define una propiedad de estilo en un elemento padre, todos los elementos hijos van a heredar esa propiedad a menos que se especifique lo contrario.
<br>
Por ejemplo, si se define un color de texto en un elemento padre `<div>`, todos los elementos `<p>` que estén dentro de ese `<div>` heredarán ese color de texto a menos que se especifique un color diferente para los elementos `<p>`.
<br>
Sin embargo, no todas las propiedades de estilo son heredadas. Ejemplificando, las propiedades de posición, tamaño y margen no se heredan (esto es debido a que su valor depende de la posición del elemento en relación con el documento y no de la posición de sus elementos padres).

## 7. En qué consiste el proceso denominado cascada?
La cascada en CSS es el proceso que determina las propiedades que se asignarán a cada elemento de una página. Cuando se poseen varias reglas CSS que afectan a un mismo elemento, todas ellas deben converger en una serie de estilos en base a las reglas de especificidad, al orden en el que aparecen y a su importancia.
