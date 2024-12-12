<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Profile Assignment Project

This Laravel project focuses on creating a simple profile data handler. It sets up a GET route `/my-profile/{id}` that connects to `ProfileController`. The controller has one method, `index`, which receives an `id` parameter and sets the variables `$name` to `"Donald Trump"` and `$age` to `"75"`. It then stores these values in an associative array `$data` along with the `id`.

Additionally, the method creates a cookie named `access_token` with the value `123-XYZ`, sets its lifespan to 1 minute, and specifies other attributes. The response returns the `$data` array with a status code of 200 and includes the created cookie.

### Features

-   Laravel framework setup
-   Route and controller for profile data
-   Associative array for data handling
-   Cookie creation and management
-   Response handling with status codes

### Submission Guidelines

-   Submit a GitHub link with a fresh repository containing only Laravel's folders and files.
-   Follow the demo structure before submission.

Happy coding! 🚀
