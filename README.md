# Laravel Blog Project 

This is a simple blog site, contains basic crud operations and   built on Laravel 8 Framework.

## Installion 

1- Open CMD and clone the repository-

``` git clone  https://github.com/Aysegnn/MyBlog.git```

2-Then cd into the folder with this command-


```cd MyBlog ```

3-Then do a composer install this command-

```  composer install  ```

4-Then create a environment file using this command-

``` cp .env.example .env ```

5- Then edit .env file with appropriate credential for your database server. Just edit these two parameter(DB_USERNAME, DB_PASSWORD).

Then create a database named myblog and then do a database migration using this command-

``` php artisan migrate```

6-At last generate application key, which will be used for password hashing, session and cookie encryption etc.

```php artisan key:generate```

# Run Server

Run server using this command-

```php artisan serve ```

Then go to http://localhost:8000 from your browser and see the app.





