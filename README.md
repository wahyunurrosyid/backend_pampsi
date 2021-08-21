## Instalasi

### Clone repo
~~~
git clone https://gitlab.com/binakarir/pam-backend.git
~~~

### Install vendor
~~~
composer install
~~~

### Generate key
~~~
php artisan key:generate
~~~

### Buat file env
~~~
cp .env.example .env
~~~

### setting akun database di .env
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pam_ugm
DB_USERNAME=root
DB_PASSWORD=
~~~

### Migrasi
~~~
php artisan migrate:fresh --seed
~~~

### Akun admin
~~~
php artisan account:admin
~~~

### Akun kampus
~~~
php artisan account:kampus
~~~

### catatan :
secara default akan digenerate 2 akun, akun admin dan kampus
