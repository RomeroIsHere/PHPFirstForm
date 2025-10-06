# Creación de pagina web Con display Flex y Grid
## Guillermo Romero Cuevas
## 2025-10-06

Se proporciona una imagen como base del sitio web a desarollar, la cual se debe de traducir a css y html.
![Imagen del sitio Web a Copiar de Yummy Gum](copythis.jpg)

### Diseño en Figma

Debido a que solo se nos proporciona una imagen del sitio web en escritorio se necesita crear un diseño para dispositivos mobiles y Tabletas a distintas Resoluciones. esto se crea a partir de Figma, Utilizando Copias mediante componentes donde se Posible.

### Diseño en HTML

Se utilizan tags semanticos donde es Posible, Utilizando elementos como ```section```
, ```article```, ```header``` y ```nav``` en los lugares apropiados. Adicionalmente se incluyen Los Elementos de Input de Usuario mediante distintos elementos ```input``` con su Tipo apropiado, ademas de un ```textarea``` ambos de los cuales se Indicaron como Requeridos dentro de un Formulario. el cual actualmente no Genera Nada, y retorna un Error 405, Metodo no Permitido.

Se Indican las clases CSS que se desean utilizar, basandonos en el FIGMA generado Previamente.

### Estilización de CSS

Se crean una serie de clases y/o selectores, utlilizando los display Flex y Grid para generar el orden de los componentes, Asegurandose que se aresponsivo a distintas tamaños.

Esto se logra  a partir de Query `@media`, el cual nos responde a el tamaño de la Pantalla, si es tactil o no, entre otras varias Capacidades que tiene.

Una vez sea mas angosto que 800px, se cambia de estilo de Escritorio a estilo de Mobil, Cambiando la visibilidad de una barra para separar el texto Poco importante del Formulario que se Debe de usar.

Se Toma Especial Consideracion para Que el Display grid se ajuste al numero correcto de columnas y filas dependiendo del tamaño de la pantalla.

Adicionalmente se utilizan Unidades Relativas a La Pantalla para modificar el Tamaño de la Letra Usada por el Sitio, para que siempre sea Legible. Por su Mayor Parte.