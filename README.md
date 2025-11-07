# comandos utilizados

Primero creamos todos los modelos junto con las migraciones, controller, facoctoy con el comando 

```php artinsa make:model -mfsr"```

ahi en la consola le pide que le coloque un nombre y le puse el correspondiente de cada uno

---

Luego configure cada uno de ellos, coloque los campos en las migraciones juntos con el nombre y luego de eso tube que hacer un `php artisan migrate`


ya cuando ya tenia configurado todo lo que hice fue

# comandos utilizados para hacer la migracion

Insertar datos de categorias
```php artisan db:seed --class="CategoriasSeeder"```

