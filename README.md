# 00-LaravelCrud
 crud de laravel



# 0-LaravelCrud
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
