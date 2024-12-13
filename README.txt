Lo primero que hay que hacer es hacer un proyecto nuevo de Laravel, para ello, yo lo he hecho desde git bash:

- laravel new laravelDWS
(Con ste comando se crea un nuevo proyecto de laravel)

Podemos iniciarlo para ver que funciona en el postman usando el siguiente comando:

- php artisan serve
(Con este comando se inicia el servidor de laravel)

Luego tenemos que crear una migración llamada "alumno", pero antes de ello debemos crear un modelo en laravel de esa tabla, los modelos en laravel sirven para interactuar con las tablas de las bases de datos de manera más eficiente, para ello se hace este comando:

- php artisan make:model Alumno
(Con este comando se crea un nuevo modelo llamado "Alumno")

Una vez hecho esto debemos crear la migración, en la migración creamos la tabla alumno y sus campos, para ello usamos el siguiente comando:

- php artisan make:migration alumno_table
(Con este comando se crea una migración de una nueva tabla llamada alumno_table)

Ya terminada la migración, se debe de ejecutar, se ejecuta con el siguiente comando:

- php artisan migrate
(Con este comando se ejecuta la migración)

Cuando esté ejecutado, puedes ir a tu base de datos y ver como tienes tu tabla alumno con sus campos que le has puesto. Lo siguiente sería crear un seeder, que rellene con datos la tabla alumno, para ello debes crear un seeder con el siguiente comando:

- php artisan make:seeder AlumnoSeeder
(Con este comando creas un seeder llamado AlumnoSeeder)

Una vez creado y hayas puesto todos los datos que quieres tener para tu tabla "alumno", debes ejecutar el seeder para que te salga en la base de datos con el siguiente comando:

- php artisan db:seed
(Con este comando se ejecuta el seeder en la base de datos)

Lo siguiente que hay que crear es un controller para controlar la base de datos, ya sea para crear, eliminar, cambiar algún alumno o  ver los alumnos que hay en la base de datos, para crearlo necesitamos el siguiente comando:

- php artisan make:controller AlumnoController
(Con este comando creas un controlador llamado AlumnoController para controlar los datos de la base de datos)

Lo siguiente que tendremos que crear es un middleware, que asegure el id de las rutas es el correcto, para crear un middleware se utiliza el siguiente comando: 

- php artisan make:middleware ValidarId
(Con este comando creas un middleware para verificar los datos)

Y por último, implementar validaciones para que los parámetros recibidos sean correctos, eso se hace con request, se utiliza este comando para crearlo:

- php artisan make:request AlumnoRequest
(Con este comando creas un request para validar que los campos que te piden en la base de datos sean los correctos)





