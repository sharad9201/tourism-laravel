
# tourism-laravel
hello nepal 
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## incase of error </br>
    use this command
        - composer dump-autoload
         -composer install
     
 ## New package trix is added so this might cause error so follow this steps
      

	• composer require te7a-houdini/laravel-trix
	• php artisan vendor:publish --provider="Te7aHoudini\LaravelTrix\LaravelTrixServiceProvider"
	• php artisan migrate
	

    From <https://laravel-news.com/trix-editor-for-laravel> 

    <html> <head> @trixassets </head> 
    <body> <form method="POST" action="route('article.store')">
     @csrf
     @trix(\App\Article::class, 'content')
     <input type="submit"> </form> </body> </html>
 ## for detail about Trix-laravel follow this link
 <a href="https://github.com/amaelftah/laravel-trix">trix docs</a>
 
