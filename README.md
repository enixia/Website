# Enixa

enixia is a website created in PHP for the Enixia association of eXia.CESI

## Requirement

Make sure you have installed : 
- [git](https://git-scm.com/book/fr/v1/D%C3%A9marrage-rapide-Installation-de-Git)
- [npm](https://www.npmjs.com/)
- [composer](https://getcomposer.org/)
- [php](http://php.net/manual/fr/install.php)
- [mysql](https://dev.mysql.com/downloads/installer/) or [mariadb](https://mariadb.com/get-started-with-mariadb/)
- [nginx](https://docs.nginx.com/nginx/admin-guide/installing-nginx/installing-nginx-open-source/)

## Installation

First clone the repo :

```bash
git clone https://github.com/enixia/Website.git
```

then copy .env.example and configure the database connection

```bash
cp .env.example .env
nano .env
```

Know you have to configure nginx add the file **enixia** in **/etc/nginx/site-enabled/** and edit it

```
touch /etc/nginx/site-enabled/enixia
nano /etc/nginx/site-enabled/enixia
```

Copy and the paste the follow content

```
#
server {
	listen 80;
	listen [::]:80;


	root /path/to/enixia;

	index index.php index.html index.htm index.nginx-debian.html;

	server_name enixia.fr www.enixia.fr admin.enixia.fr;

	location / {
		# First attempt to serve request as file, then
		# as directory, then fall back to displaying a 404.
		try_files $uri $uri/ /index.php?$query_string;
	}

	# pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
	#
	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
	
		# With php7.0-cgi alone:
		#fastcgi_pass 127.0.0.1:9000;
		# With php7.0-fpm:
		fastcgi_pass unix:/run/php/php7.2-fpm.sock;
	}
}

```

note: replace the path /path/to/enixia with the path where you cloned the site

Restart nginx

```
service nginx restart
```

Configure your dns to match these domain (see below) with the IP of your nginx server.

```
enixia.fr
admin.enixia.fr
```

Then we can finished the installation with a simple command : 

```
composer install
```

note: after install completed the command will automatically do this :

```
npm install
npm run dev
php artisan storage:link
php -r \"file_exists('.env') || copy('.env.example', '.env');\"
php artisan key:generate --ansi
php artisan migrate --seed
```

note: you will probably have to change the file permissions permissions for laravel see [here](https://vijayasankarn.wordpress.com/2017/02/04/securely-setting-file-permissions-for-laravel-framework/)

## Usage

The website has 2 entry points :
```
http://enixia.fr/
http://admin.enixia.fr/
```

## License
[MIT](https://choosealicense.com/licenses/mit/)