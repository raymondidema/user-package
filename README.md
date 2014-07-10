# User Package

This user packages is to start up your application.

## Get package
In your terminal:

    composer require raymondidema/user-package 0.*
    php artisan migrate --package="raymondidema/user-package"
    php artisan db:seed --class="Raymondidema\UserPackage\Database\Seeds\UserDatabaseSeeder"

## Config package
In /app/config/app.php add:
````
'providers' => array(
    ...
    'Raymondidema\UserPackage\UserPackageServiceProvider',
)
````

## Publish package

Publish the package so you can customize it:
````
php artisan view:publish raymondidema/user-package
````