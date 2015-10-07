# Funny Inspiring

[![Latest Stable Version](https://poser.pugx.org/gmsantosxl/inspiring/v/stable)](https://packagist.org/packages/gmsantosxl/inspiring) [![Total Downloads](https://poser.pugx.org/gmsantosxl/inspiring/downloads)](https://packagist.org/packages/gmsantosxl/inspiring) [![Latest Unstable Version](https://poser.pugx.org/gmsantosxl/inspiring/v/unstable)](https://packagist.org/packages/gmsantosxl/inspiring) [![License](https://poser.pugx.org/gmsantosxl/inspiring/license)](https://packagist.org/packages/gmsantosxl/inspiring)

Change Laravel inspiring quotes to [Notepad++ easter egg quotes](http://en.wikipedia.org/wiki/Notepad%2B%2B#Easter_egg) and have a lot more inspiration.

## Instalation

Include this package via Composer:

    composer require gmsantosxl/inspiring
	
Edit your `app/Console/Commands/Inspire.php`

    <?php
	
    namespace App\Console\Commands;

	use Illuminate\Console\Command;
	//use Illuminate\Foundation\Inspiring;
	use Gmsantosxl\Inspiring\Inspiring;
	
Then run `php artisan inspire` and have fun! :)
