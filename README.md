## Installation
* clone this repo
* run composer install in root project
* copy .env.example to .env
* set your rajaongkir api token in .env
* run command `php artisan jwt:secret`
* run migrate `php artisan migrate:fresh --seed`
* run rajaongkir command to get data `php artisan rajaongkir:fetch`

## Usage
* Get token : `localhost:8000/api/auth/login`

* request to endpoint who need authentication
```php
Authorization : Bearer <token>
```

## Endpoint

* `api/auth/login`
    * untuk login, menggunakan email, password('secret') dari table user

* `api/v1/search/provinces`
    * params : ?province_id=1

* `api/v1/search/cities`
    * params : ?city_id=427



## Package
* [x] [dingo/api](https://github.com/dingo/api)
* [x] [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* [ ] [mpociot/laravel-apidoc-generator](https://github.com/mpociot/laravel-apidoc-generator)
* [ ] [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors)
