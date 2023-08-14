# Ejercicio 1 - Responder el siguiente cuestionario

## 1. Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML es un lenguaje de marcado de hipertexto (sus siglas significan *HyperText Markup Language*). Es un lenguaje que se usa para indicar la estructura basica de una pagina web. Este usa distintas etiquetas para indicar los distintos elementos de del sitio: títulos, subtítulos, párrafos, imágenes, links, etc.

Fue creado en 1991 con el objetivo de crear un sistema de hipertexto que les permitiera a los investigadores CERN intercambiar informacion facilmente. En 1995 se publicó **HTML 2.0** (la primera estandarización del lenguaje). En 1997, se generaron dos nuevas versiones: **HTML 3.2** (a principios de año) **HTML 4.0** (al final del año). A finales del año 1999, se publicó una nueva especificación oficial: la versión **HTML 4.01**. Desde el año 2014, **HTML 5** es estándar y siguen surgiendo nuevas modificaciones y actualizaciones. 


## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
El W3C recomienda los siguientes principios básicos:

* **Estructura:** utilizar una estructura clara y semántica en el documento HTML, usando etiquetas adecuadas para cada sección y contenido. La estructura debe reflejar la jerarquía y relación entre los diferentes elementos del contenido.
* **Separación de presentación y contenido:** utilizar HTML para definir el contenido y la estructura del documento, mientras que el diseño y la presentación deben ser controlados a través de CSS (Cascading Style Sheets).
* **Accesibilidad:** el documento HTML debe ser accesible para todos los usuarios, independientemente de su discapacidad o dispositivo de acceso. Esto incluye el uso de etiquetas adecuadas para describir el contenido, el uso de atributos "alt" en las imágenes, el uso de enlaces de texto descriptivos, entre otros.
* **Validación:** validar el código HTML para asegurarse de que cumple con los estándares definidos por el W3C y que no contiene errores.
* **Optimización:** optimizar el documento HTML para mejorar su rendimiento y velocidad de carga.


## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto? 

### Desaprobado
Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados se definen en el manual de referencia en los lugares apropiados, pero claramente marcados como desaprobados. Los elementos desaprobados pueden declararse obsoletos en versiones futuras de HTML.
Los agentes de usuario deberían seguir dando soporte a los elementos desaprobados por razones de compatibilidad con versiones anteriores.

### Obsoleto
En HTML, una etiqueta obsoleta es aquella que ha sido reemplazada por una nueva versión de HTML o que ya no se utiliza en absoluto. Las etiquetas obsoletas aún pueden funcionar en algunos navegadores web, pero su uso se considera desaconsejado porque pueden producir errores o problemas de compatibilidad con otros navegadores y dispositivos.
Cuando una etiqueta se considera obsoleta, el W3C (Consorcio World Wide Web) la elimina de las especificaciones HTML oficiales y recomienda a los desarrolladores que dejen de usarla. En su lugar, se recomienda usar las etiquetas actualizadas que cumplen con los estándares de HTML. Los desarrolladores deben evitar utilizar etiquetas obsoletas y actualizar su código HTML para asegurarse de que sea compatible con los estándares actuales de la web y los navegadores modernos.

        
## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
El DTD (Document Type Definition) es una especificación que describe la estructura y los elementos que se pueden usar en un documento HTML o XML. El DTD se utiliza para validar documentos HTML y asegurarse de que cumplan con las normas y estándares de HTML.
En la especificación de HTML 4.01, se contemplan tres tipos de DTD:
1. Strict DTD: Este DTD es el más restrictivo y se utiliza para documentos HTML que deben seguir las reglas más estrictas y no permitir ningún tipo de elemento o atributo que no cumpla con la especificación.

2. Transitional DTD: Este DTD es menos restrictivo que el estricto y se utiliza para documentos HTML que se crearon antes de que se publicara la especificación de HTML 4.01. Este DTD permite algunos elementos y atributos que ya no se usan en la versión actual de HTML, pero que se mantienen para garantizar la compatibilidad con los documentos antiguos.

3. Frameset DTD: Este DTD es específico para documentos HTML que utilizan framesets (marcos) y se utiliza para validar documentos que contienen marcos en su estructura.

Es importante señalar que con la evolución de los estándares web, el uso de DTD ha ido disminuyendo en favor de otras formas de validación y estructuración de documentos HTML, como por ejemplo el uso de esquemas XML o la validación mediante el uso de JavaScript o CSS.


## 5. ¿Qué son los metadatos y cómo se especifican en HTML?
Son ítems descriptivos cruciales sobre la propia web, siendo utilizado en diferentes contextos, pero especialmente al momento de informar sobre el concepto general de la página. Por ejemplo, un metadato importante es indicar que al pagina esta codificada con UTF-8, o que el autor es tal persona.

Para indicar este dato en el HTML se utiliza la etiqueta `<meta>` , la cual debe estar dentro de `<head>`.
```html
<!--Asi es como se especifica un metadato-->
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Julian Butti">
</head> 
```

