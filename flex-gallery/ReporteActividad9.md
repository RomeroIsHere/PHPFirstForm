# Galería con Flex
## Actividad 9
#### Guillermo Romero Cuevas

A Partir de la Galeria que creamos Previamente, Se Creo una Nueva Galeria, con Las Mismas Imagenes, y utilizando la Funcionalidad de Los Display tipo Flex, Utilizando Varias de Sus Propiedades y atributos css.

En Especifico, Mi galeria Utiliza la siguiente clase para el contenedor de Las Imagenes

```css
.galeria-inline{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: flex-start;
    flex-wrap: wrap;
}
```

Lo Cual Permite que Las Imagenes cambien de Posicion en el Mismo Orden. En Especifico, que Tengan el mismo espacio entre cada Imagen, Sin Tomar En cuenta un espacio entre el borde del contenedor y la imagen.

adicionalmente, utilize una Imagen extra Ancha, de Aspecto 32:9, la cual necesita de sus propias consideraciones, por lo cual, ademas de los Atributos que controlan La Vista de las Imagenes Normales, Se tiene una clase para las Imagenes extra Anchas

```css
.galeria-inline img{
    display: inline-block;
    max-height: 180px;
    margin-top: 10px;
    border: 2px solid #006d43;
    cursor: pointer;
    
    transition: transform 0.5s ease;   
    
}

.wide{
  width: 640px;
}
```

wide sobre escribe la Longitud de La Imagen, Asumiendo que toma la altura Maxima del selector Anterior(lo cual nos da un aspecto de 640:180, equivalente a 32:9)

Adicionalmente, Utilizando solamente la Altura Maxima, Se puede Modificar el Tamaño de La Pantalla y Se Mantendra la Relacion de Aspecto(en la Mayoria de los Casos)