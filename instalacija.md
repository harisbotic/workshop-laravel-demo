1. Instalirati xampp sa phpmyadmin
2. Instalirati composer
3. Projekat staviti u C:\xampp\htdocs\blog
4. Napraviti bazu "blog" u phpmyadmin (http://localhost/phpmyadmin/server_databases.php?server=1)
5. Otvoriti xampp admin panel
6. Otvoriti "Shell"
7. U shell ukucati ostatak: (bez ```)

(ako hocete da uradite paste, kliknite desni klik na shell)
```
cd htdocs
cd blog
composer install
```
Generisanje migracija:
```
php artisan migrate
```
Generisanje admina + testnih podataka:
```
php artisan db:seed
```
