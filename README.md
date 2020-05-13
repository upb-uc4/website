## Screenshots

### Landing Page Draft
![Landing Page (First Draft)](./public/img/screenshots/landing.png)

### About Page Draft
![About (First Draft)](./public/img/screenshots/about.png)

## Run this project locally with Docker

```git clone https://github.com/Laradock/laradock.git```

```cp env-example .env```

Adjust the .env file at several locations (you can simply search for the keys):

Set the projects path to 
```APP_CODE_PATH_HOST=../PATH_TO_THIS_PROJECT```

Set the DB Engine to
```PMA_DB_ENGINE=mariadb```

Finally, set the root of the Apache server to
```APACHE_DOCUMENT_ROOT=/var/www/public```.


Save the file, change to the laradock direction and spin up the docker containers:
```docker-compose up -d apache2 mariadb phpmyadmin```. This will take a while.

Head to the project directory of this git repository and rename the ```.env.example``` file to ```.env```.

Set ```DB_CONNECTION=mysql``` and ```DB_HOST=mariadb```. Adjust the database password with the password provided in the ```.env``` of Laradock (by default, the admin user is ```root``` and the password is also ```root```).

Open your browser and navigate to ```localhost:8080```. You should the a phpmyadmin page. Login with the provided credentials in the last step and create a database with the same name you used in this projects ```.env``` file.

Now open the terminal and navigate to this git repository. Type ```docker-compose exec workspace bash``` to connect to the dockerized server. Now run ```npm run watch```. The project should compile now. If everything works fine you can now navigate to ```localhost``` or ```localhost:3000``` (for hot reloads) and see the website.

If you got any problems with the setup process, feel free to contact Theo.






