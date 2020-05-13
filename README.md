## Screenshots

### Landing Page Draft
![Landing Page (First Draft)](./public/img/screenshots/landing.png)

### About Page Draft
![About (First Draft)](./public/img/screenshots/about.png)

## Run this project locally with Docker

1. ```git clone https://github.com/Laradock/laradock.git```
2. ```cp env-example .env```
3. Modify the following lines in the generated ```.env``` file:
    
    ```APP_CODE_PATH_HOST=../PATH_TO_THIS_PROJECT```

    ```PMA_DB_ENGINE=mariadb```
    
    ```APACHE_DOCUMENT_ROOT=/var/www/public```.

4. Save the file
5. Spin up the docker containers; this may take a while:

    ```docker-compose up -d apache2 mariadb phpmyadmin```. 

6. Head to the website directory (this repo) 
7. Rename  ```.env.example```  to ```.env```
8. Modify the renamed ```.env```:

    ```DB_CONNECTION=mysql```, 
    
    ```DB_HOST=mariadb```, 
    
    ```DB_USERNAME=root```,
    
    ```DB_PASSWORD=root```
9. Open your browser and navigate to phpmyadmin on ```localhost:8080```

   Login with ```server=mariadb```, ```username=root```, ```password=root```
   
10. Inside this git repository run ```docker-compose exec workspace bash```. This will connect you to the dockerized server
  
11. Run ```php artisan key:generate``` in order to generate an ```APP_KEY``` right into your ```.env``` file
   
12. Run ```npm run watch``` to generate all required css and js files

13. Navigate to ```localhost``` or ```localhost:3000``` (for hot reloads) and see the website

If you got any problems with the setup process, feel free to contact Theo






