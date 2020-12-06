
# tourism-webApp using laravel


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

## for contribution
    -first fork the repo
    -then clone repo using pull request
    -then create your own branch 
    -now you are good to go
## incase of error </br>
    use this command
        - composer dump-autoload
         -composer install

  ## for storing image you may face error so follow this steps:
    -copy and paste FILESYSTEM_DRIVER=public in .env if not added
    -makesure in filesystem.php it has  'default' => env('FILESYSTEM_DRIVER', 'public'),
    -run this command: Php artisan storage:link 
    
 ## toastr notification 
    do follow this link :<a href="https://www.nicesnippets.com/blog/laravel-6-toastr-notifications-using-yoeunestoastr-package">toastr notification</a>
    step:
       - composer require yoeunes/toastr
       -in config/App.php file add 
       'providers' => [
    ...
    ````
    Yoeunes\Toastr\ToastrServiceProvider::class
    ...
]; 

     

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
 
