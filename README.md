# 00-LaravelCrud
 crud de laravel

 Un CRUD es
 C -> Create
 R -> Read
 U -> Update
 D -> Delete

 Dinamica Basica Laravel

## Instalar Framework

### A SABER
Estare usando Linux

██████████████████  ████████   chon@LpHp 
██████████████████  ████████   --------- 
██████████████████  ████████   OS: Manjaro Linux x86_64 
██████████████████  ████████   Host: HP Laptop 15-dy1xxx 
████████            ████████   Kernel: 6.0.19-4-MANJARO 
████████  ████████  ████████   Uptime: 3 hours, 27 mins 
████████  ████████  ████████   Packages: 1459 (pacman), 7 (flatpak) 
████████  ████████  ████████   Shell: bash 5.1.16 
████████  ████████  ████████   Resolution: 1366x768, 1920x1080 
████████  ████████  ████████   DE: Plasma 5.27.5 
████████  ████████  ████████   WM: KWin 
████████  ████████  ████████   WM Theme: Revery 
████████  ████████  ████████   Theme: [Plasma], Breeze [GTK2/3] 
████████  ████████  ████████   Icons: Shadows-Dark-Icons [Plasma], Shadows-Dark-Icons [GTK2/3] 
                               Terminal: konsole 
                               CPU: Intel i3-1005G1 (4) @ 3.400GHz 
                               GPU: Intel Iris Plus Graphics G1 
                               Memory: 6497MiB / 7635MiB 

### Instalar Framework
 Ya que me gusta usar Tailwind usare Tailwind pero igual se puede usar cualquier framework... ahora el tailwind es solo
 para el front end parael back es laravel  aca podemos instalar

#### Laravel: 
 Con Composer...
    
    composer create-project laravel/laravel spw

 al proyecto

    cd spw   

 Acorrer
    
    php artisan serve

#### Tailwind: 
 Ahora Tailwind

 Instalar:

    npm install -D tailwindcss postcss autoprefixer

 Crear archivos:
 
    npx tailwindcss init -p

 Configurar template
 spw/tailwind.config.js

    /** @type {import('tailwindcss').Config} */
    module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    }

 Add the Tailwind directives to your CSS
 spw/resources/css/app.css

    @tailwind base;
    @tailwind components;
    @tailwind utilities;

 Despues de esto puedes Correrla 

    npm run dev

## Base de Datos 


 para arrancar mysql

      mysql -u root -p

 Crear base de datos

      CREATE DATABASE nombre_base_datos

 Para ver todos los usuarios con sus permisos

      SELECT User, Host, Grant_priv FROM mysql.user;

 Para ver los usuarios y permisos

      CREATE USER 'nombre_usuario'@'localhost' IDENTIFIED BY 'contraseña';
      GRANT ALL PRIVILEGES ON nombre_basedatos.* TO 'nombre_usuario'@'localhost';
      FLUSH PRIVILEGES;

 Despues de esto debemos de hacer las migraciones

      php artisan migrate      

 Creamos la tabla

      php artisan make:migration create_tasks_table


 Luego de eso en spw/database/migrations/2023_06_28_173255_create_tasks_table.php
 añadimos esto

      $table->string('title', 255);
      $table->text('description');
      $table->dateTime('due_date');
      $table->enum('status', ['Pendiente', 'En progreso', 'Completada']);

 Migra
      
      php artisan migrate

 mysql

      show columns from tasks;
puedes hacer esto para ver el contenido de tasks osea sus... row? bueno ya lo olvide      


 Crear controlador y modelo

      php artisan make:controller TaskController --resource --model=Task
 tener cuidadoy recordadr como y conque nombre lo creas y haces todo...     


