# Como instalar
Seguir los siguientes pasos
- git clone https://github.com/asdrubalp9/zipcodechallenge.git
- cd zipcodechallenge
- composer install
- php artisan migrate:fresh --seed


# Mejoras

- los errores se reportan de manera adecuada en formato JSON

# Procedimiento

Convertí el archivo txt en CSV, despues coloque todo en una sola tabla y se ejecuta una query sin necedidad de usar el ORM para hacer la consulta de manera mas rápida.
