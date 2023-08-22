# Ejercicio 1 - Responder el siguiente cuestionario

## 1. ¿Ventajas de HTML5?
- Multimedia integrada: permite la reproducción de contenido multimedia sin necesidad de plugins.
- Compatibilidad móvil: facilita la creación de sitios web responsivos para diferentes dispositivos.
- Mejoras en formularios: introduce nuevos tipos de campos de entrada y validación en el lado del cliente.
- Mejoras en semántica: ofrece etiquetas semánticas que mejoran la estructura y comprensión del contenido.
- APIs avanzadas: proporciona interfaces de programación para interacciones ricas en aplicaciones web.
- Rendimiento mejorado: carga asíncrona de recursos y almacenamiento en caché para mayor velocidad.
- Menos dependencia de plugins: reduce la necesidad de plugins de terceros como Flash.
- Acceso offline: permite a las aplicaciones web funcionar sin conexión a Internet.
- Mejoras en accesibilidad: facilita la creación de sitios web accesibles para personas con discapacidades.
- Evolución constante: HTML5 sigue siendo actualizado y mejorado por la comunidad web.

## 2. ¿Por qué utilizarlo?
- HTML5 ofrece características modernas para el desarrollo web que mejoran la experiencia del usuario.
- Permite crear sitios web y aplicaciones accesibles y responsivos para una variedad de dispositivos.
- Reduce la necesidad de depender de plugins externos, mejorando la seguridad y el rendimiento.
- Proporciona herramientas para crear contenido multimedia en el sitio sin requerir tecnologías adicionales.
- Facilita la creación de aplicaciones web interactivas y enriquecidas mediante sus APIs avanzadas.
- Promueve prácticas de diseño web más accesibles y estructuradas a través de etiquetas semánticas.
- Permite a las aplicaciones web funcionar sin conexión, mejorando la continuidad del servicio.

## 3. Nombre ventajas
Ventajas nombradas en el inciso 1.

<br>

# Ejercicio 2

## a) ¿Qué formatos soporta ?
Algunos de los formatos que soporta HTML son:
- png.
- jpg.
- svg.
- gif.
- webp.

## b) Crear un elemento audio

````html
<audio controls preload="auto">
    <source src="https://www.html5tutorial.info/media/vincent.ogg" type="audio/ogg">
</audio>
````

<br>

# Ejercicio 3

## Crear un elemento de video

````html
<video controls width="320" height="240">
    <source src="https://www.html5tutorial.info/media/html5iscool.ogv" type="video/ogg">
</video>
````

<br>

# Ejercicio 4

## a) Crear un formulario con un campo requerido.

````html
<form>
    <label for="name">Nombre:</label>
    <input id="name" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````

<br>

## b) Crear un formulario con un campo de tipo email y validar que funcione.

````html
<form>
    <label for="email">Email:</label>
    <input type="email" id="email" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````

<br>

## c) Crear un formulario con un campo de tipo fecha y validar que funcione.

````html
<form>
    <label for="date">Fecha:</label>
    <input type="date" id="date" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````

<br>

## d) Crear un formulario con un campo de tipo color y validar que funcione.

````html
<form>
    <label for="color">Color:</label>
    <input type="color" id="color">
    <button type="submit"><b>Enviar</b></button>
</form>
````

<br>

## e) Crear un formulario con un campo de tipo number y validar que funcione. Además configurar
valores mínimos y máximos permitidos.
````html

<form>
    <label for="num">Ingrese un número del 1 al 1000:</label>
    <input type="number" min="1" max="1000" id="num" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````

