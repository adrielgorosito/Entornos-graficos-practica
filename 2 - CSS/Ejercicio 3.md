# Ejercicio 3 - Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
p.quitar { 
    color: red; 
}
*.desarrollo { 
    font-size: 8px; 
}
.importante {
    font-size: 20px; 
}
```

```html
<p class="desarrollo">
  En este primer párrafo trataremos lo siguiente:
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
  Este párrafo debe ser quitado de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p>
  En este otro párrafo trataremos otro tema:<br />
  xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
  Y este es el párrafo más importante de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

---

El código CSS hace:
- Asigna un color de letra rojo a todas las etiquetas `<p>` con clase `class="quitar"`.
- Cambia el tamaño de la letra a 8 píxeles a todas las etiquetas con clase `class="desarrollo"`.
- Cambia el tamaño de la letra a 20 píxeles a todas las etiquetas con clase `class="importante"`.
