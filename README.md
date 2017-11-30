# Laravel Database Log Emails

A simple database logger for all outgoing emails sent by Laravel application.


You can support me to this project and [make some donation]( http://paypal.me/stojankukrika).

## Installation

Laravel Database Log Emails can be installed via [composer](http://getcomposer.org) by requiring the `stojankukrika/laravel-database-log-emails` package in your project's `composer.json`.

```json
{
    "require": {
        "stojankukrika/laravel-database-log-emails": "*"
    }
}
```

Next add the service provider and the alias to `app/config/app`.

```php
'providers' => [
    // ...
    stojankukrika\LaravelDatabaseLogEmails\LaravelDatabaseLogEmailsServiceProvider::class,
],
```


Now, run this in terminal:

```bash
php artisan migrate
```

## Usage

After installation, any email sent by your website will be logged to `email_logs` table in the site's database.
