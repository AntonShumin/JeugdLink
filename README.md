# Transferred To GitHub

# Uni-t Laravel Boilerplate

### Getting Started

- Terminal
    - Run `composer install` and `composer update`
    - Run `yarn` and `yarn upgrade`
    - Run `gulp`, `gulp --production` and `gulp watch`
- Duplicate `.env.example` as `.env` and change settings.

- You can rename the App and its namespaces by using `php artisan app:name`

### Multi language

- For multi-language projects the validation, pagination and password translations will automatically be set. You should only need to create your own custom translations.

- NL, FR and DE translations are already added for common strings (such as auth and validation).

- To publish other standard translation files run `php artisan trans:publish <locale>`

### This boilerplate includes

- Bootstrap
- FontAwesome
- jQuery
- Humans.txt
- Favicon, touch icons and tiles
- Vue

Installing other packages should be done through `yarn add <package>`

### Good to know

- A custom error was added to return the user back when the CSRF token was expired.
- User email verification is enabled by default, if you want to disable it, check the [documentation](https://laravel.com/docs/5.7/verification) to see which changes you have to undo.
