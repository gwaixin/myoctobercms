# MYOCTOBERCMS TESTING

## installation

Clone project
```sh
$ git clone https://github.com/gwaixin/myoctobercms.git
```

Open your terminal and go to project directory /myoctobercms then install project
```sh
$ composer install
```

Open phpmyadmin and create database named
```
myoctoberdb
```

Setting up OctoberCMS for the first time
```sh
$ php artisan october:install
```

Follow this screenshot and you should see "Installation Complete"
https://gyazo.com/8533ebf719f4e4bf68aa08fc17595e9a

Start development
```sh
$ php -S localhost:8000
```

Now check your browser and go to localhost:8000, you should see the frontside of the project

For admin : ``` localhost:8000/backend ```