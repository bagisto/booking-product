# Booking-product

<p>Booking Product API facilitates seamless integration with the Booking Product functionality within your Bagisto system. It provides endpoints and methods to interact with and harness the capabilities of a comprehensive booking system, enabling smooth communication and utilization of booking-related features in your applications.</p>

### 1. Requirements:

* **Bagisto**: v2.0

### 2. Installation:

##### Unzip the respective extension zip and then merge "packages" and "storage" folders into project root directory.
##### Goto config/app.php file and add following line under 'providers'

~~~
Webkul\BookingProduct\Providers\BookingProductServiceProvider::class,
~~~

##### Goto composer.json file and add following line under 'psr-4':

~~~
"Webkul\\BookingProduct\\": "packages/Webkul/BookingProduct/src",
~~~

##### Run these commands below to complete the setup:

~~~
composer dump-autoload
~~~

~~~
php artisan migrate
~~~

~~~
php artisan route:cache
~~~