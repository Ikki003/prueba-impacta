## Prueba Iker Lorente Impacta

**Este proyecto ha sido desarrollado utilizando las siguientes tecnologías:**

- **Laravel**: para la organización de rutas, vistas y lógica del backend.
- **Livewire**: para crear el componente personalizado 'contact-form' y gestionar la validación de datos de forma dinámica.
- **Backpack**: para la implementación del panel de administración.
- **HTML**: para la estructura y maquetación de la interfaz web.
- **CSS**: para el diseño del sitio web.
- **JavaScript**: para la funcionalidad del menú en diseño responsive y la integración de una librería de sliders.
- **MySQL / Eloquent**: para la gestión y consulta de la base de datos.

### Fase 1 - Maquetación Frontend

En primer lugar, lo primero que hice al recibir los recursos para la web es optimizar las imagenes, ya que pesaban demasiado. He usado https://tinify.com/ para este propósito.

La maquetación HTML del sitio web se encuentra en la ruta **resources\views\home.blade.php**, aunque el `<head>` se encuentra en el archivo **resources\views\layouts\app.blade.php**

Tanto **resources\views\home.blade.php** como **resources\views\layouts\app.blade.php** están 'unidos' gracias a las directivas de blade @extends y @yield respectivamente.

#### Explicación HTML

**HEAD**

Como ya he dicho, el `<head>` se encuentra en **resources\views\layouts\app.blade.php**, y contiene los siguientes elementos:

- Librería de sliders (swiper)
- Archivo CSS compilado con Vite (el archivo CSS se encuentra en **resources\css\app.css**). Para compilarlo necesitaremos correr el comando 'npm install' y posteriormente 'npm run dev'. En caso de que estemos en producción el comando será 'npm run build'.
- Estilos de livewire

Las líneas utilizadas para incluir estos elementos son:

- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
- @vite('resources/css/app.css')
- @livewireStyles

**BODY**

En este caso el `<body>` también se encuentra en **resources\views\layouts\app.blade.php**, y está compuesto por los siguientes elementos:

- El contenido del archivo **resources\views\home.blade.php**
- Scrips de livewire

Las líneas usadas respectivamente son:

- @yield('content') --> en **resources\views\home.blade.php** usamos @extends('layouts.app') arriba del todo del archivo
- @livewireScripts

**HEADER**

El `<header>` se encuentra en **resources\views\home.blade.php** y lo usamos para englobar tanto el baner de la parte superior, como el navbar y el slider.

**SECTION**

Las diferentes secciones (`<section>`) de la maquetación web también se encuentran en **resources\views\home.blade.php**, y las uso para englobar las "cards" enumeradas, la seccion de "vendemos humo con mucha pasión" y la sección de los logos de los clientes.

**FOOTER**

El `<footer>` nuevamente se encuentra en **resources\views\home.blade.php**, y lo uso para englobar los liks y logo al final de la página.

**FORMULARIO**

En este caso usamos un componente personalizado de Livewire para crear el formulario.

Para crear este componente usé el comando 'php artisan make:livewire ContactForm'.

Una vez ejecutado el comando, se crearon los archivos:

- **app\Livewire\ContactForm.php**
- **resources\views\livewire\contact-form.blade.php**

En el primer archivo nos encargaremos de renderizar la vista y de validar los datos, así como coger los valores del formulario, mientras que el segundo archivo será la propia vista que mostraremos.

En la función de 'render()' en **app\Livewire\ContactForm.php** estoy pasando también a la vista un array con las diferentes opciones posibles para los 'input radio'. Las diferentes opciones están establecidas en un Enum, encontrado en **app\Enums\OpcionesFormularioEnum.php**.

El componente 'contact-form' lo estoy mostrando en **resources\views\home.blade.php** mediante la etiqueta **<livewire:contact-form />**.

**IMÁGENES**

En cuanto a las imágenes se refiere, estas se encuentran en la carpeta **public\images**.

Por otra parte, para mostrar las imagenes estoy usando la directiva de blade 'asset', que coge las imagenes directamente desde el directorio 'public'.

Además, en todas las imágenes he usado el atributo 'loading="lazy"', que se encarga de cargar las imágenes de forma diferida, lo que significa que la imagen solo se cargará cuando esté cerca de entrar en el viewport (parte de la pantalla que vemos).

Por último, el atributo 'alt' proporciona un texto alternativo para la imagen, y será el texto que se mostrará si la imagen no puede cargarse por alguna razón.

**JAVASCRIPT**

He incluido en el propio **resources\views\home.blade.php** 2 etiquetas `<script>` para los siguientes propósitos:

- El primer script carga los recursos necesarios para que la libería del lider pueda funcionar.
- En el segundo script hago dos cosas: en primer lugar inicializo el slider y en segundo lugar me encargo de gestionar el click y el scroll en relación al botón del menú en diseños más pequeños (móviles y tablets).

#### Explicación CSS

Como he mencionado, el archivo CSS para estilar el HTML, se encuentra en **resources\css\app.css**.

En este caso he usado CSS y no Bootstrap 5 o Tailwind CSS porque estoy más familiarizado con CSS.

Explicación en cuestión:

1. Importo la tipografía indicada con el elemento '@import'. La tipografía la he obtenido de GoogleFonts.

2. Mediante el selector universal '*' especifico algunas reglas de diseño que deben aplicarse a todo el documento, como la tipografía a usar (y su respaldo en caso de que la fuente principal no esté disponible), el margen, el padding y la propiedad box-sizing configurada como 'border-box', para que el ancho y alto de los elementos incluyan tanto el contenido como el padding y border.

3. En el elemento ':root' especifico algunas variables concretas que usaré a lo largo de todo el documento, como el color del texto, tanto rojo como azul, el tamaño de los iconos de redes sociales y el margen de las secciones

4. Por otra parte, en cuanto a las decisiones de diseño se refiere, y obviando estilos concretos, he seguido el siguiente patrón:

    - **Flexbox**: utilizado para alinear de manera simple elementos como el 'navbar', el número de las cards, el fondo azul con la imagen, le formulario y las propias cards con los logos de los clientes. En este último caso el proceso ha sido un poco más complejo ya que he tenido que calcular el espacio que debe ocupar cada card para ajustarme al diseño pedido. Por ejemplo, en las cards más largas, su ancho ha sido del 200%, ya que debe ocupar el mismo tamaño que 2 más pequeñas, y el cáclulo lo he hecho con 'calc()'.

    - **Grid**: empleado para mostrar 1 o 2 cards por línea según el tamaño del dispositivo que se esté usando (también se podría haber hecho fácilmente con flexbox, pero he querido combinar ambos métodos) y para el footer. En el caso del footer, he optado por Grid ya que permite trabajar simultáneamente sobre dos ejes, y he creído que era más conveniente.

    - **Swiper**: he decidido utilizar esta librería ligera de JavaScript para crear el slider del header con 4 imágenes.

    - **Media queries**: las he usado para definir cómo debe adaptarse el diseño en función del tamaño del dispositivo.

### Fase 2 - Implementación Backend

#### Explicación Laravel

En este caso estoy usando Laravel para gestionar las rutas de la aplicación y las diferentes vistas.

**RUTAS**

El archivo de rutas en cuestión es: **routes\web.php**.

En primer lugar, en este archivo estamos definiendo la ruta '/', que será la página principal de nuestra web, y que mostrará el archivo **resources\views\home.blade.php**.

Por otra parte, también estamos sobreescribiendo dos rutas de Laravel Backpack para que cuando el usuario haga se registre o loguee: 

- En vez de llamar al controlador **vendor\backpack\crud\src\app\Http\Controllers\Auth\LoginController.php** llamemos a nuestro propio controlador, en la ruta **app\Http\Controllers\Auth\LoginController.php**. 

- En vez de llamar al controlador **vendor\backpack\crud\src\app\Http\Controllers\Auth\RegisterController.php** llamemos a nuestro controlador, en la ruta **app\Http\Controllers\Auth\RegisterController.php**.

Esto lo hacemos con el objetivo de que cuando el usuario haga login o se registre, no sea redirigido a '/admin/dashboard', sino a '/admin/contacto'.

**BASE DE DATOS**

En este caso, he incluido el archivo **db.sql** con la tabla para almacenar los contactos que nos lleguen desde el formulario, aunque realmente no lo he usado, ya que Laravel ya provee su propia forma de crear tablas.

En Laravel, son las 'migraciones' las que se encargan de crear las tablas con los diferentes campos. En este caso tenemos:

- database\migrations\0001_01_01_000000_create_users_table.php
- database\migrations\0001_01_01_000001_create_cache_table.php
- database\migrations\0001_01_01_000002_create_jobs_table.php
- database\migrations\2024_08_11_132737_create_contactos_table.php

Para usar estas migraciones, previamente tendremos que haber creado una base de datos en nuestro gestor de bases de datos mysql, y haber conectado nuestro proyecto de Laravel a esta base de datos mediante el archivo .env.

La configuración tendrá que ser similar a la siguiente:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_bd
DB_USERNAME=nombre_usuario
DB_PASSWORD=contrasena

Por último para correr las migraciones, usaremos el comando 'php artisan:migrate' desde la terminal.

**LIVEWIRE**

Previamente ya he explicado cómo hemos creado el componente de Livewire y el uso que le hemos dado a los 2 archivos generados, por lo que simplemente me limitaré a explicar el flujo que he seguido para almacenar los datos mandados por el formulario.

1. En **app\Livewire\ContactForm.php** definimos los campos del formulario (estos valores los vinculamos en la vista con la propiedad "wire:model='campo'") y las validaciones para cada campo, mediante la función 'rules()'. En caso de que alguna validación falle, usamos la función 'messages()' para especificar los mensajes que verán los usuarios.

2. En **app\Livewire\ContactForm.php** definimos también una función 'submit()', a la que llamaremos desde la vista cuando presionemos 'enviar mensaje' (wire:submit="submit"). En esta función llamaremos a 'validate()', que cogerá las reglas definidas previamente y comprobará si los valores que acaba de recibir se adecúan a esas reglas.

3. Si los valores son correctos, llamamos a la functión 'store' de nuestro 'ContactoService' (**app\Services\ContactoService.php**), que se encargará de almacenar la información en la base de datos. Uso el patrón de diseño 'service' junto a un DTO (**app\DTOs\ContactoDto.php**) para poder trabajar con los modelos cómodamente.

**LARAVEL BACKPACK**

Una vez instalado laravel backpack desde su documentación oficial, podremos crear los CRUDs con el comando 'php artisan backpack:crud {model}'. Para crear los modelos, habremos tenido que usar el comando 'php artisan make:model Modelo'.

Creados ya los CRUDS con Laravel Backpack, se crearán automáticamente las vitas y componentes necesarios. 

Para poder entrar al panel de aministración iremos a la ruta: 'http://127.0.0.1:8000/admin/register' (en localhost).

En mi caso he creado un 'CRUD' para los contactos, en el que solo permito eliminar el contacto, ya que no tendría sentido modificarlo, y otro para los usuarios, en el que se pueden crer, editar, ver y eliminar los usuarios.

Por último, es importante tener en cuenta que si el proyecto está en local, estará habilitada por defecto la opción de registrar nuevos usuarios, mientras que si la aplicación está en producción esta opción estará deshabilitada, por lo que por ejemplo podríamos crear un seeder para añadir un usuario y luego eliminar ese seeder.