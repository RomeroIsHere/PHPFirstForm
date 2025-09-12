# PHP y Base de Datos
##### Guillermo Romero Cuevas

Se Presenta un Proyecto que Permite Tomar una variedad de datos de un Formulario, y Hacer Pruebas de Existencia y Pruebas Contra Constante `NULL` de PHP, Para Comprobar que Datos exitan dentro del Registro.

Por el Momento no se Sanitizan los datos del Usuario, Por lo cual campos que no son `NULL`, sino que Vacios, Son posibles de encontrar. Si se Accede a la Pagina donde se ejecuta el Registro, tambien se podran generar campos Nulos, a pesar de los Chequeos.

Debido al uso de Consultas Preparadas, Los riesgos de Inyeccion de SQL son Muy Bajos, Sin embargo debido al Metodo por el que se Muestran los Datos en la Pagina Shower.php, La Inyeccion de codigo Javascript es muy Facil.

La solucion a Estos Problemas es Facil de implementar, sin embargo, se decidio Permitirlo por el Momento, Debido al tiempo de Desarollo y El hecho de que Esto es de Relativa poca importancia en un Sitio Web que no esta Abierto al publico. Una Vez se abra al publico, Estos Problemas Terminan Siendo Extremadamente Riesgosos, debido a que Sin Sanitizar los Inputs del usuario, Malos Actores pueden correr Codigo arbitrario dentro de la pagina Web, Incluso si solo es Javascrip y HTML.

## 1. Procesar datos PHP

Dentro de PHP Se puede Hacer Pruebas Contra las variables Pasadas por la Variable Super-Global `$_POST` y `$_FILES` Las cuales Contienen un Diccionario de Datos y Objetos, con las llaves siendo los `id` Elegidos para Cada uno de los elementos de HTML en el Formulario

## 2. Conexión a base de datos

Dentro de PHP hay 2 Opciones simples para conectarse a un Servidor de Base de Datos.

### MySQLi y PDO.
Estas son las dos maneras de conectarse a una Base de datos mediante PHP. PDO es Capaz de conectarse a muchas ma Variedad de Base de Datos, por lo cual su portabilidad es mejor, sin embargo es mas complejo al trabajr con el. Mientras que MySQLi Permite Conexiones UNICAMENTE cone MySQL, con una Menor Complejidad en el Desarollo, debido a la Simplicidad de su Conexión.

Debido al Tiempo Limitado, y familiaridad previa con MySQL i MySQLi, elegí esta opción

## 3. Registrar datos de usuario
Debido a La Naturaleza de Inserciones en MySQL, se Necesita una Variable para cada uno de los Datos a insertarse, por lo cual Cada elemento de Formulario se debe de Checar Individualmente. Eto se puede Cumplir de 2 Maneras

- Crear una Prueba a cada Uno de los Campos, Repitiendo `if(isset($_POST['Datos']))` Para cada uno, o Mediante Null-Coallescing (`??`)
- Crear una Funcion que Automaticamente Asigne una Variable a Cada uno de Los Campos y los inserte a la Consulta Preparada

Debido al Corto tiempo, Se eligio la Opcion que resulta en el menor tiempo de Programación, Creando un `if(isset($_POST['Datos']))` Para cada uno de los Campos, y Lidiando Manualmente con los Casos de Borde (Tal como es el Caso al Separar el Nombre mediante `$_FILES['avatar']['name']` o al Crear Un Caso especial para los elementos CHECKBOX los cuales pueden tener distintas Respuestas)

Sin Embargo, esta Solución es Poco Escalable, y necesita de Atencion constante, ya que al cambiar alguna cosa con el Formulario Original, Generara una cadena de Cambios que deben de ser Efectuados para Permitir el Correcto funcionamiento del sitio

## Notas finales

La Base de Datos Originalmente se Habia Diseñado de Tal Manera que Estubiera normalizada, Permitiendo Agregar Niveles de Subscripcion Distintos a los actualmente Establecidos y Permitiendo una Tabla de Intereses, Totalmente Independiente de los Usuarios, sin embargo, Debido a las Necesidades del Proyecto, y el Hecho de que los Nombres de Usuario no Son Unicos, Es Dificil de Establecer la Tabla de Relaciones entre usuarios y sus intereses, sin Tener que Forzar a cada usuario a tener un Nombre de usuario distinto.

Por Ahora, Se tendra un Campo de Texto, el cual contendra los Intereses del usuario dentro de si mismo como Texto Plano, Sin embargo si se necesitara cambiar esto, Se recomienda Volver a Normalizar las Tablas, de tal manera que Los intereses sean totalmente independientes de los usuarios